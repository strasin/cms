<?php

return [
    'labels' => [
        'main_settings'                      => 'Configurações Principais',
        'main_settings_description'          => 'Nesta página você pode alterar as principais configurações do Flute.',
        'site_name'                          => 'Nome do Site',
        'site_url'                           => 'URL do Site',
        'timezone'                           => 'Fuso horário',
        'steam_api'                          => 'Chave API STEAM',
        'footer_description'                 => 'Descrição do Rodapé',
        'maintenance_mode'                   => 'Modo de Manutenção',
        'maintenance_message'                => 'Mensagem de Manutenção',
        'is_performance'                     => 'Modo de Desempenho',
        'cron_mode'                          => 'Modo CRON',
        'csrf_enabled'                       => 'Tokens CSRF',
        'convert_to_webp'                    => 'Converter Imagens para WebP',
        'debug'                              => 'Modo Debug',
        'debug_ips'                          => 'Debug IPs',
        'currency_view'                      => 'Moeda Exibida',
        'oferta_view'                        => 'Mostrar Oferta',
        'oferta_url'                         => 'URL da Oferta',
        'share'                              => 'Compartilhar Erros',
        'copyright'                          => 'Copyright Flute',
        'discord_link_roles'                 => 'Discord Role Linking',
        'minify'                             => 'Minify CSS & JS',
        'logo'                               => 'Logo',
        'bg_image'                           => 'Imagem de Fundo',
        'reset_password'                     => 'Recuperar Senha',
        'only_social'                        => 'Autenticação Apenas Rede Social',
        'only_modal'                         => 'Somente Autenticação Modal',
        'confirm_email'                      => 'Confirmação de E-mail',
        'remember_me'                        => 'Lembrar de Mim',
        'remember_me_duration'               => 'Duração do Lembrar de Mim',
        'check_ip'                           => 'Vincular Sessão ao IP',
        'security_token'                     => 'Vincular Sessão ao Dispositivo',
        'change_uri'                         => 'Permitir Alteração de URL',
        'default_avatar'                     => 'Avatar Padrão',
        'default_banner'                     => 'Banner Padrão',
        'smtp'                               => 'Usar SMTP',
        'host'                               => 'Servidor',
        'port'                               => 'Porta',
        'username'                           => 'Nome de usuário',
        'password'                           => 'Senha',
        'secure'                             => 'Tipo de Criptografia',
        'from'                               => 'Remetente',
        'locale'                             => 'Idioma Padrão',
        'available'                          => 'Idiomas Disponíveis',
        'db_driver'                          => 'Driver do Banco de Dados',
        'database_name'                      => 'Nome do Banco de Dados',
        'user'                               => 'Usuário',
        'database'                           => 'Banco de dados',
        'prefix'                             => 'Prefixo da Tabela',
        'share_description'                  => 'Seu site enviará relatórios de erros aos servidores Flute.',
        'discord_link_roles_description'     => 'Sincronização automática das funções do Flute com as funções do Discord. Veja <a href="https://docs.flute-cms.com" class="accent">aqui</a>.',
        'copyright_description'              => 'Flute copyright no rodapé. Se você gosta do Flute por favor, mantenha-os 😘.',
        'minify_description'                 => 'Reduza o tamanho do CSS e JS removendo espaços em branco e otimizando.',
        'main'                               => 'Principal',
        'home'                               => 'Configurações Principais',
        'flute_key'                          => 'Chave Flute',
        'description'                        => 'Descrição do Site',
        'robots'                             => 'Configurações dos Robôs',
        'keywords'                           => 'Palavras-chave',
        'lk_only_modal'                      => 'Recarga de Saldo no Modal',
        'change_theme'                       => 'Alterar Tema',
        'logo_light'                         => 'Logo para o Tema Claro',
    ],

    'options' => [
        'robots' => [
            'index_follow' => 'Mostrar página no Google e seguir links',
            'index_nofollow' => 'Mostrar página no Google, mas não seguir links',
            'noindex_nofollow' => 'Não mostrar a página no Google e não seguir links',
            'noindex_follow' => 'Não mostrar a página no Google, mas seguir links',
        ],
    ],

    'placeholders' => [
        'site_name'                => 'Digite o nome do site',
        'site_url'                 => 'Insira URL do site',
        'timezone'                 => 'Exemplo: Europe/Moscow',
        'steam_api'                => 'Digite a chave API STEAM',
        'footer_description'       => 'Digite a descrição do rodapé',
        'maintenance_message'      => 'Digite a mensagem de manutenção',
        'currency_view'            => 'Digite o formato da moeda',
        'oferta_url'               => 'Insira URL da oferta',
        'smtp_host'                => 'Servidor SMTP',
        'smtp_port'                => 'Porta SMTP',
        'username'                 => 'Nome de usuário SMTP',
        'password'                 => 'Senha SMTP',
        'secure'                   => 'Selecione o tipo de criptografia',
        'from'                     => 'E-mail do remetente',
        'db_driver'                => 'Selecionar driver do banco de dados',
        'database_name'            => 'Nome do Banco de Dados',
        'db_host'                  => 'Servidor do banco de dados',
        'db_port'                  => '3306',
        'db_user'                  => 'Usuário do Banco de Dados',
        'db_database'              => 'Nome do Banco de Dados',
        'db_password'              => 'Senha do Banco de Dados',
        'db_prefix'                => 'e.x.: lvl_, my_, user_',
        'locale'                   => 'Selecione o idioma da interface',
        'debug_ips'                => 'Digite IPs de depuração, separados por vírgula',
        'flute_key'                => 'Digite a chave de Flute do marketplace',
        'keywords'                 => 'Digite palavras-chave',
        'description'              => 'Digite a descrição',
        'robots'                   => 'index, nofollow',
        'change_theme'             => 'Ativar alteração de tema',
        'test_mail'                => 'E-mail para teste',
    ],

    'buttons' => [
        'clear_cache'          => 'Limpar Cache',
        'save'                 => 'Salvar',
        'add'                  => 'Adicionar',
        'save_profile_images'  => 'Salvar Imagens de Perfil',
        'save_flute_images'    => 'Salvar Imagens do Flute',
        'test_mail'            => 'Testar Conexão SMTP',
    ],

    'messages' => [
        'unknown_tab'                  => 'Aba de configurações desconhecidas.',
        'settings_saved_successfully'  => 'Configurações salvas com sucesso!',
        'settings_save_error'          => 'Erro ao salvar as configurações: ',
        'images_saved_successfully'    => 'Imagens salvas com sucesso!',
        'cache_cleared_successfully'   => 'Cache limpo com sucesso!',
        'database_not_found'           => 'Banco de dados não encontrado.',
        'cannot_edit_default_db'       => 'Não é possível editar o banco de dados padrão.',
        'connection_not_found'         => 'Configuração de conexão não encontrada.',
        'unsupported_driver'           => 'Tipo de driver não suportado.',
        'add_database_success'         => 'Banco de dados adicionado com sucesso!',
        'add_database_error'           => 'Erro ao adicionar banco de dados: ',
        'edit_database_success'        => 'Banco de dados atualizado com sucesso!',
        'edit_database_error'          => 'Erro ao atualizar o banco de dados: ',
        'remove_database_success'      => 'Banco de dados removido com sucesso!',
        'remove_database_error'        => 'Erro ao remover banco de dados: ',
        'database_exists'              => 'A database with that name already exists.',
        'connection_test_failed'       => 'O teste de conexão falhou.',
        'flute_images_saved'           => 'Imagens do Flute salvas com sucesso!',
        'upload_failed'                => 'Falha no upload do arquivo.',
        'upload_directory_error'       => 'O diretório de upload não existe.',
        'sender_email_not_set'         => 'E-mail do remetente não está definido.',
        'test_mail_sent'               => 'E-mail de teste foi enviado.',
        'profile_images_saved'         => 'Imagens do perfil salvas com sucesso!',
        'unknown_error'                => 'Ocorreu um erro desconhecido.',
        'loading'                      => 'Carregando...',
    ],

    'breadcrumbs' => [
        'admin_panel' => 'Painel Admin',
    ],

    'tabs' => [
        'main_settings'      => 'Configurações Principais',
        'databases'          => 'Banco de dados',
        'users'              => 'Usuários',
        'mail'               => 'E-mail',
        'localization'       => 'Localização',
        'additional_settings' => 'Configurações Adicionais',
    ],

    'blocks' => [
        'main_settings'                    => 'Configurações Principais',
        'tech_work_settings'               => 'Configurações de Manutenção',
        'optimization_security'            => 'Otimização & Segurança',
        'optimization_security_description' => 'Faça alterações somente com <b>total compreensão</b>!',
        'debug_settings'                   => 'Configurações de Debug',
        'personal_cabinet_settings'        => 'Configurações da Conta Pessoal',
        'session_settings'                 => 'Configurações de Sessão',
        'session_description'              => 'Sessão é o estado de autenticação do usuário no sistema.',
        'image_settings'                   => 'Configurações de Imagem',
        'auth_settings'                    => 'Configurações de Autenticação',
        'mail_settings'                    => 'Configurações de E-mail',
        'profile_settings'                 => 'Configurações do Perfil',
        'localization_settings'            => 'Configurações de Localização',
        'active_languages'                 => 'Idiomas Ativos',
        'active_languages_description'     => 'Esses idiomas estarão disponíveis para os usuários.',
        'seo'                              => 'Configurações SEO',
    ],

    'popovers' => [
        'steam_api'                 => 'Esta chave é necessária para buscar dados do Steam. Obtenha-a <a target="_blank" href="https://steamcommunity.com/dev/apikey">aqui</a>.',
        'maintenance_mode'          => 'Usuários sem as devidas permissões não poderão acessar o site.',
        'is_performance'            => 'O site funcionará mais rápido armazenando em cache consultas de longa duração.',
        'cron_mode'                 => 'Isto usa CRON em vez de solicitações normais. Veja <a target="_blank" href="https://docs.flute-cms.com">aqui</a>.',
        'convert_to_webp'           => 'Todas as imagens do site serão convertidas para WebP para reduzir o tamanho.',
        'debug'                     => 'Todos os erros do site serão exibidos. Você pode configurar quem pode vê-los.',
        'share'                     => 'Compartilhe erros do Flute para ajudar a melhorar o produto.',
        'discord_link_roles'        => 'Sincronização automática das funções do Flute com as funções do Discord. Veja <a href="https://docs.flute-cms.com" class="accent">aqui</a>.',
        'from'                      => 'Este e-mail será exibido como o remetente nos e-mails.',
        'reset_password'            => 'Habilitar recuperação de senha do usuário.',
        'only_social'               => 'Autenticação padrão por login/senha será desativado.',
        'only_modal'                => 'Substitui páginas de login/registro por um modal.',
        'confirm_email'             => 'O registro não está completo até que o e-mail seja confirmado.',
        'remember_me'               => 'Permitir lembrar o usuário por meio de cookie.',
        'check_ip'                  => 'Vincule cada sessão a um endereço IP específico.',
        'security_token'            => 'Vincule cada sessão a um dispositivo específico.',
        'debug_ips'                 => 'A depuração funciona apenas com estes endereços IP. Separe por vírgulas.',
        'currency_view'             => 'Moeda padrão exibida no Flute.',
        'oferta_url'                => 'Link aberto ao clicar em "oferta" na recarga.',
        'flute_key'                 => 'Esta chave vincula seu site ao marketplace do Flute. Adquira-a <a target="_blank" href="https://flute-cms.com">aqui</a>.',
        'seo'                       => 'Essas configurações afetam a indexação do mecanismo de busca.',
        'lk_only_modal'             => 'Substitui o painel do usuário por um modal.',
        'change_theme'              => 'Ativar a troca manual de tema.',
        'prefix'                    => 'Adiciona um prefixo a todas as tabelas do banco de dados. Permite que vários aplicativos compartilhem um único banco de dados sem conflitos de nomes de tabelas.',
    ],

    'examples' => [
        'timezone'                  => 'Exemplo: Europe/Moscow',
        'remember_me_duration'      => 'Exemplo: 3600 (1 hora)',
        'bg_image'                  => 'Use imagens sutis para melhor contraste na interface do usuário.',
        'oferta_url'                => 'Exemplo: https://example.com/offer ou /offer',
        'from'                      => 'Exemplo: someone@example.com',
        'debug_ips'                 => 'Exemplo: 128.0.0.1,127.0.0.1,125.0.1',
        'robots'                    => 'Indexação de mecanismos de pesquisa',
        'keywords'                  => 'Exemplo: public,myproject,cs2',
        'prefix'                    => 'Exemplo: lvl_, my_, user_',
    ],

    'modals' => [
        'add_database'  => 'Adicionar Novo Banco de Dados',
        'edit_database' => 'Editar Banco de Dados',
    ],

    'databaseName'             => 'Nome',
    'host'                     => 'Servidor',
    'user'                     => 'Usuário',
    'database'                 => 'Banco de Dados',
    'prefix'                   => 'Prefixo',
    'actions'                  => 'Ações',
    'edit'                     => 'Editar',
    'delete'                   => 'Excluir',
    'confirm_delete_database'  => 'Tem certeza de que deseja excluir este banco de dados?',
    'add_database'             => 'Adicionar Banco de Dados',
];
