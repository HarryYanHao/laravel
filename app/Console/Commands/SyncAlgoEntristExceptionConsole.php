<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Facades\DB;

class SyncAlgoEntristExceptionConsole extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'sync:algoEntrustExcp';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = '同步算法下单委托错误列表';

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
	public function fire()
	{
		//
        $pdo=DB::connection('oms_sync')->getPdo();
        try{
            $pdo->beginTransaction();
            $pdo->query("insert into `ins_algo_entrust_exception_bak` (entrust_price,entrust_amount,created_at,comment,ins_id) select entrust_price,entrust_amount,created_at,comment,ins_id from `ins_algo_entrust_exception`;
");
            $pdo->query("truncate `ins_algo_entrust_exception`");
        }catch (\PDOException $ex){
            $pdo->rollBack();
        }
        $pdo->commit();
        var_dump('success');



	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
		//	['example', InputArgument::REQUIRED, 'An example argument.'],
		];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
			['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
		];
	}

}
