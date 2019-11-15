<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Imports\PncImport;
use App\Imports\CitiImport;
use App\Imports\DiscoverImport;

use Maatwebsite\Excel\Facades\Excel;
use App\Classes\PncPatternFinder;

class importpnc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importt:pnc {file} {type}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      try{
        $file_name = $this->argument('file');
        if(!Storage::exists($file_name)){
          echo "file Not found";
        }
        $type = $this->argument('type');
        if(!$file_name){
          echo "Type Not found";
          exit;
        }

        switch($type){
            case 'pnc';
              Excel::import(new PncImport, $this->argument('file'));
            break;
            /*case 'citi';
              Excel::import(new CitiImport, $this->argument('file'));
            break;*/
            case 'discover';
              Excel::import(new DiscoverImport, $this->argument('file'));
            break;
        }
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
}
