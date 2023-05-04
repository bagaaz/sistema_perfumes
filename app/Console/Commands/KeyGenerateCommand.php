<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class KeyGenerateCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'key:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the application key';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // Gere a nova chave de aplicação
        $key = $this->generateRandomKey();

        // Atualize a variável APP_KEY no arquivo .env
        $this->updateAppKey($key);

        // Exiba uma mensagem de sucesso
        $this->info('Application key generated successfully: '.$key);
    }

    /**
     * Gera uma nova chave de aplicação.
     *
     * @return string
     */
    protected function generateRandomKey()
    {
        return \Illuminate\Support\Str::random(32);
    }

    /**
     * Atualiza a variável APP_KEY no arquivo .env.
     *
     * @param  string  $key
     * @return void
     */
    protected function updateAppKey($key)
    {
        file_put_contents(base_path('.env'), str_replace(
            'APP_KEY='.$this->laravel['config']['app.key'],
            'APP_KEY='.$key,
            file_get_contents(base_path('.env'))
        ));
    }
}
