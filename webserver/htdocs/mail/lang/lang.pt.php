<?php
/*
//
//  Portuguese (pt) language file - Português do Brasil (pt_BR) - ISO-8859-1
//
*/
$lang['footer']['loading'] = "Aguarde...";
$lang['getmail']['no_status'] = "Nenhum registro anterior encontrado";
$lang['dkim']['confirm'] = "Tem certeza?";
$lang['danger']['dkim_not_found'] = "Registro DKIM não encontrado";
$lang['danger']['dkim_remove_failed'] = "Não foi possível remover o registro DKIM selecionado";
$lang['danger']['dkim_add_failed'] = "Não foi possível adicionar o registro DKIM fornecido";
$lang['danger']['dkim_domain_or_sel_invalid'] = " Registro DKIM inválido";
$lang['danger']['dkim_key_length_invalid'] = "Registro DKIM com tamanho inválido";
$lang['success']['dkim_removed'] = " Registro DKIM removido com sucesso";
$lang['success']['dkim_added'] = "Registro DKIM salvo com sucesso";
$lang['danger']['access_denied'] = "Acesso negado ou dados inválidos";
$lang['danger']['domain_invalid'] = "Domínio inválido";
$lang['danger']['mailbox_quota_exceeds_domain_quota'] = "Max. espaço excede o espaço do domínio";
$lang['danger']['object_is_not_numeric'] = "Valor %s não é numérico";
$lang['success']['domain_added'] = "Domínio adicionado %s";
$lang['danger']['alias_empty'] = "Você deve preencher o campo do Apelido";
$lang['danger']['goto_empty'] = "Você deve preencher o campo Encaminhar para";
$lang['danger']['blacklist_exists'] = "O registro já existe na BlackList";
$lang['danger']['blacklist_from_invalid'] = "O registro Blacklist possui formato inválido";
$lang['danger']['whitelist_exists'] = "O registro já existe na WhiteList";
$lang['danger']['whitelist_from_invalid'] = "O registro Whitelist possui formato inválido";
$lang['danger']['alias_invalid'] = "O endereço digitado como Apelido é inválido";
$lang['danger']['goto_invalid'] = "O endereço digitado como Encaminhar para é inválido";
$lang['danger']['alias_domain_invalid'] = "O endereço do Encaminhamento de Domínio é inválido";
$lang['danger']['target_domain_invalid'] = "O endereço de Domínio Destino é inválido";
$lang['danger']['object_exists'] = "Objeto %s já existe";
$lang['danger']['domain_exists'] = "Domínio %s já existe";
$lang['danger']['alias_goto_identical'] = "o Apelido e o Encaminhar para devem ser diferentes";
$lang['danger']['aliasd_targetd_identical'] = "o Encaminhamento de Domínio não pode ser igual ao Domínio Destino";
$lang['success']['alias_added'] = "Apelido(s) adicionado(s) com sucesso";
$lang['success']['alias_modified'] = "Apelido(s) alterados(s) com sucesso";
$lang['success']['aliasd_modified'] = "Direcionamento de Domínio(s) alterados(s) com sucesso";
$lang['success']['mailbox_modified'] = "A conta %s foi alterada com sucesso";
$lang['success']['msg_size_saved'] = "Limite do tamanho de mensagem ajustado com sucesso";
$lang['danger']['aliasd_not_found'] = "Encaminhamento de Domínio não encontrado";
$lang['danger']['targetd_not_found'] = "Domínio de Destino não encontrado";
$lang['danger']['aliasd_exists'] = "Encaminhamento de Domínio já existe";
$lang['success']['aliasd_added'] = "Adicionado Encaminhamento de Domínio %s";
$lang['success']['aliasd_modified'] = "Encaminhamento de Domínio %s alterado com sucesso";
$lang['success']['domain_modified'] = "Domínio %s alterado com sucesso";
$lang['success']['domain_admin_modified'] = "Changes to domain administrator %s have been saved";
$lang['success']['domain_admin_added'] = "Domínio administrator %s has been added";
$lang['success']['changes_general'] = 'Alteração efetuada com sucesso';
$lang['success']['admin_modified'] = "Administrador alterado com sucesso";
$lang['danger']['exit_code_not_null'] = "Falha: código de erro %d";
$lang['danger']['mailbox_not_available'] = "Conta não disponível";
$lang['danger']['username_invalid'] = "Nome de usuário inválido";
$lang['danger']['password_mismatch'] = "As senhas não estão iguais";
$lang['danger']['password_complexity'] = "A senha não atende aos parâmetros de segurança";
$lang['danger']['password_empty'] = "A senha não pode ser vazia ou em branco";
$lang['danger']['login_failed'] = "Login falhou";
$lang['danger']['mailbox_invalid'] = "Conta inválida";
$lang['danger']['mailbox_invalid_suggest'] = 'Conta inválida, sugestão: "%s"?';
$lang['info']['fetchmail_planned'] = "Procedimento de retirada de emails foi agendado. Verifique o processo mais tarde.";
$lang['danger']['fetchmail_source_empty'] = "Definir a pasta de origem";
$lang['danger']['fetchmail_dest_empty'] = "Definir a pasta de destino";
$lang['danger']['is_alias'] = "o endereço %s já é um Apelido";
$lang['danger']['is_alias_or_mailbox'] = "o endereço %s já é uma Conta ou Apelido";
$lang['danger']['is_spam_alias'] = "%s foi registrado como Apelido para Spam";
$lang['danger']['quota_not_0_not_numeric'] = "Espaço deve ser um campo numérico >= 0";
$lang['danger']['domain_not_found'] = "Domínio não encontrado.";
$lang['danger']['max_mailbox_exceeded'] = "Número máximo de contas exedido (%d of %d)";
$lang['danger']['mailbox_quota_exceeded'] = "Espaço excede o limite do domínio (max. %d MiB)";
$lang['danger']['mailbox_quota_left_exceeded'] = "Não existe espaço suficiente (espaço disponível: %d MiB)";
$lang['success']['mailbox_added'] = "Conta %s adicionada com sucesso";
$lang['success']['domain_removed'] = "Domínio %s removido com sucesso";
$lang['success']['alias_removed'] = "Apelido %s removido com sucesso";
$lang['success']['alias_domain_removed'] = "Encaminhamento de Domínio %s removido com sucesso";
$lang['success']['domain_admin_removed'] = "Administrator do domínio %s removido com sucesso";
$lang['success']['mailbox_removed'] = "Conta %s removida com sucesso";
$lang['danger']['max_quota_in_use'] = "Espaço da Conta deve ser maior ou igual a %d MiB";
$lang['danger']['domain_quota_m_in_use'] = "Espaço do Domínio deve ser maior ou igual a %s MiB";
$lang['danger']['mailboxes_in_use'] = "O máximo de Contas deve ser maior ou igual a %d";
$lang['danger']['aliases_in_use'] = "O máximo de Apelidos deve ser maior ou igual a %d";
$lang['danger']['sender_acl_invalid'] = "Campo Sender ACL é inválido";
$lang['danger']['domain_not_empty'] = "Não é possível remover um domínio com Contas/Apelidos/Direcionamentos";
$lang['warning']['spam_alias_temp_error'] = "Falha Temporária: Não foi possível adicionar Apelido para Spam.";
$lang['danger']['spam_alias_max_exceeded'] = "O número máximo de Apelidos para Spam foi excedido";
$lang['danger']['fetchmail_active'] = "O processo esta em andamento, aguarde o seu término.";
$lang['danger']['validity_missing'] = 'Você deve definir um período de validade';
$lang['user']['on'] = "On";
$lang['user']['off'] = "Off";
$lang['user']['user_change_fn'] = "";
$lang['user']['user_settings'] = 'Configurações do usuário';
$lang['user']['mailbox_settings'] = 'Configrações da conta';
$lang['user']['mailbox_details'] = 'Detalhes da conta';
$lang['user']['change_password'] = 'Alterar senha';
$lang['user']['new_password'] = 'Nova senha:';
$lang['user']['save_changes'] = 'Salvar';
$lang['user']['password_now'] = 'Senha atual (confirme a alteração):';
$lang['user']['new_password_repeat'] = 'Confirmar senha (repetir):';
$lang['user']['new_password_description'] = 'Requerido: mínimo de 6 characteres com letras e números.';
$lang['user']['did_you_know'] = '<b>Você sabia?</b> Você pode usar tags no endereço de email ("conta+<b>privado</b>@example.com") para classificar as mensagens automaticamente para uma determinada pasta (exemplo: "privado").';
$lang['user']['spam_aliases'] = 'Apelidos temporários';
$lang['user']['alias'] = 'Apelido';
$lang['user']['aliases'] = 'Apelidos';
$lang['user']['aliases_send_as_all'] = 'Não verificar remetente para os domínios';
$lang['user']['alias_create_random'] = 'Gerar um apelido automaticamente';
$lang['user']['alias_extend_all'] = 'Extender apelido por 1 hora';
$lang['user']['alias_valid_until'] = 'Válido até';
$lang['user']['alias_remove_all'] = 'Remover todos os apelidos';
$lang['user']['alias_time_left'] = 'Tempo restante';
$lang['user']['alias_full_date'] = 'd.m.Y, H:i:s T';
$lang['user']['alias_select_validity'] = 'Período de validade';
$lang['user']['hour'] = 'Hora';
$lang['user']['hours'] = 'Horas';
$lang['user']['day'] = 'Dia';
$lang['user']['week'] = 'Semana';
$lang['user']['weeks'] = 'Semanas';
$lang['user']['spamfilter'] = 'Filtro de Spam';
$lang['user']['spamfilter_wl'] = 'WhiteList';
$lang['user']['spamfilter_wl_desc'] = 'Endereços em  WhiteList <b>nunca</b> classificar como spam. Pode ser usado coringa *@example.com.';
$lang['user']['spamfilter_bl'] = 'BlackList';
$lang['user']['spamfilter_bl_desc'] = 'Endereços em BlackList <b>sempre</b> classificar como spam e rejeitar. Pode ser usado coringa *@example.com.';
$lang['user']['spamfilter_behavior'] = 'Classificação';
$lang['user']['spamfilter_table_rule'] = 'Regra';
$lang['user']['spamfilter_table_action'] = 'Ação';
$lang['user']['spamfilter_table_empty'] = 'Nenhum registro';
$lang['user']['spamfilter_table_remove'] = 'remover';
$lang['user']['spamfilter_table_add'] = "Adicionar registro";
$lang['user']['spamfilter_behavior'] = 'Verificar';
$lang['user']['spamfilter_default_score'] = 'Nivel de Spam:';
$lang['user']['spamfilter_green'] = 'Verde: essa mensagem <b>não é</b> spam';
$lang['user']['spamfilter_yellow'] = 'Amarelo: essa mensagem <b>pode ser</b> spam, será marcada como spam e classificada na pasta Spam';
$lang['user']['spamfilter_red'] = 'Vermelho: essa mensagem <b>é mesmo spam</b> e será rejeitada definitivamente pelo servidor';
$lang['user']['spamfilter_default_score'] = 'Valores padrão:';
$lang['user']['spamfilter_hint'] = 'O primeiro espaço indica "baixo nível de spam", a segunda representa "alto nível de spam".';
$lang['user']['tls_policy_warning'] = '<strong>Aviso:</strong> Se você selecionar para forçar o envio encryptado , alguns emails poderão ser rejeitados.<br />Mensages que não satisfizerem as politicas dos outros servidores serão rejeitadas definitivamente.';
$lang['user']['tls_policy'] = 'Regras de Encryptação';
$lang['user']['tls_enforce_in'] = 'Forçar TLS na entrada';
$lang['user']['tls_enforce_out'] = 'Forçar TLS na saída';
$lang['user']['misc_settings'] = 'Outras configurações';
$lang['user']['misc_delete_profile'] = 'Outras configurações';
$lang['user']['no_record'] = 'Nenhum registro';
$lang['start']['dashboard'] = '%s - Painel';
$lang['start']['start_rc'] = 'Webmail Roundcube';
$lang['start']['start_sogo'] = 'Abrir SOGo';
$lang['start']['mailcow_apps_detail'] = 'Use um Mailcow App para acessar seus emails, calendário, contatos e outras informações.';
$lang['start']['mailcow_panel'] = 'Iniciar mailcow UI';
$lang['start']['mailcow_panel_description'] = 'O Mailcow UI está disponível para Administradores e Usuários.';
$lang['start']['mailcow_panel_detail'] = '<b>Administradores:</b> podem criar, alterar ou apagar contas e apelidos , alterar domínios e outras informações de seus domínios atribuídos.<br />
	<b>Usuários:</b> podem criar apelidos por tempo determinado , alterar senha e configuração do nível do filtro de spam.';
$lang['start']['recommended_config'] = 'Configuração recomendada (sem o ActiveSync)';
$lang['start']['imap_smtp_server'] = 'IMAP e SMTP server data';
$lang['start']['imap_smtp_server_description'] = 'Para uma melhor utilização use o <a href="%s" target="_blank"><b>Mozilla Thunderbird</b></a>.';
$lang['start']['imap_smtp_server_badge'] = 'Ler/Criar emails';
$lang['start']['imap_smtp_server_auth_info'] = 'Utilize o endereço de email completo com o método de autentucação PLAIN.<br />
Os dados de login serão encryptados pelo servidor.';
$lang['start']['managesieve'] = 'ManageSieve';
$lang['start']['managesieve_badge'] = 'Filtro de email';
$lang['start']['managesieve_description'] = 'Utilize o <b>Mozilla Thunderbird</b> com a <a style="text-decoration:none" target="_blank" href="%s"><b>extensão para sieve</b></a>.<br />Inicie o Thunderbird, acesse os Complementos e solte o arquivo xpi que foi baixado, na janela aberta.<br />Preencha com o servidor <b>%s</b>, porta <b>4190</b> se for solicitado. Os dados de acesso são os mesmos da sua conta de email.';
$lang['start']['service'] = 'Serviço';
$lang['start']['encryption'] = 'Método de criptografia';
$lang['start']['help'] = 'Mostrar/Ocultar painel de ajuda';
$lang['start']['hostname'] = 'Hostname';
$lang['start']['port'] = 'Porta';
$lang['start']['footer'] = 'Rodapé';
$lang['header']['mailcow_settings'] = 'Configuração';
$lang['header']['administration'] = 'Administração';
$lang['header']['mailboxes'] = 'Contas';
$lang['header']['user_settings'] = 'Configurações do usuário';
$lang['header']['login'] = 'Entrar';
$lang['header']['logged_in_as_logout'] = 'Olá <b>%s</b> (Clique para Sair)';
$lang['header']['locale'] = 'Idioma';
$lang['mailbox']['domain'] = 'Domínio';
$lang['mailbox']['alias'] = 'Apelido';
$lang['mailbox']['aliases'] = 'Apelidos';
$lang['mailbox']['domains'] = 'Domínios';
$lang['mailbox']['mailboxes'] = 'Contas';
$lang['mailbox']['mailbox_quota'] = 'Espaço máximo da Conta';
$lang['mailbox']['domain_quota'] = 'Espaço';
$lang['mailbox']['active'] = 'Ativo';
$lang['mailbox']['action'] = 'Ação';
$lang['mailbox']['ratelimit'] = 'Limite de envios por hora';
$lang['mailbox']['backup_mx'] = 'Backup MX';
$lang['mailbox']['domain_aliases'] = 'Encaminhamento de Domínio';
$lang['mailbox']['target_domain'] = 'Domínio Destino';
$lang['mailbox']['target_address'] = 'Encaminhar para';
$lang['mailbox']['username'] = 'Usuário';
$lang['mailbox']['fname'] = 'Nome';
$lang['mailbox']['filter_table'] = 'Procurar';
$lang['mailbox']['yes'] = '&#10004;';
$lang['mailbox']['no'] = '&#10008;';
$lang['mailbox']['quota'] = 'Espaço';
$lang['mailbox']['in_use'] = 'Em uso (%)';
$lang['mailbox']['msg_num'] = 'Mensagens';
$lang['mailbox']['remove'] = 'Remover';
$lang['mailbox']['edit'] = 'Alterar';
$lang['mailbox']['archive'] = 'Arquivo';
$lang['mailbox']['no_record'] = 'Nenhum registro';
$lang['mailbox']['add_domain'] = 'Adicionar Domínio';
$lang['mailbox']['add_domain_alias'] = 'Adicionar Apelido de Domínio';
$lang['mailbox']['add_mailbox'] = 'Adicionar Conta de Email';
$lang['mailbox']['add_alias'] = 'Adicionar Apelido';
$lang['info']['no_action'] = 'Nenhuma ação foi definida';
$lang['delete']['title'] = 'Remover objeto';
$lang['delete']['remove_domain_warning'] = '<b>Aviso:</b> Você está prestes a remover o Domínio <b>%s</b>!';
$lang['delete']['remove_domainalias_warning'] = '<b>Aviso:</b> Você está prestes a remover o Encaminhamento de Domínio <b>%s</b>!';
$lang['delete']['remove_domainadmin_warning'] = '<b>Aviso:</b> Você está prestes a remover o Administrador <b>%s</b>!';
$lang['delete']['remove_alias_warning'] = '<b>Aviso:</b> Você está prestes a remover o Apelido <b>%s</b>!';
$lang['delete']['remove_mailbox_warning'] = '<b>Aviso:</b> Você está prestes a remover a Conta <b>%s</b>!';
$lang['delete']['remove_mailbox_details'] = 'A Conta será <b>excluída permanentemente</b>!';
$lang['delete']['remove_domain_details'] = 'Esse procedimento removerá o Encaminhamento de Domínio.<br /><br /><b>O Domínio deve estar sem nenhuma configuração para ser removido.</b>';
$lang['delete']['remove_alias_details'] = 'Os usuários não poderão mais enviar ou receber emails através deste endereço.</b>';
$lang['delete']['remove_button'] = 'Remover';
$lang['delete']['previous'] = 'Voltar';
$lang['edit']['save'] = 'Salvar';
$lang['edit']['archive'] = 'Acesso ao arquivo';
$lang['edit']['max_mailboxes'] = 'Máximo de contas:';
$lang['edit']['title'] = 'Editar dos Objetos';
$lang['edit']['target_address'] = 'Enviar para os emails <small>(separar por vírgula)</small>:';
$lang['edit']['active'] = 'Ativo';
$lang['edit']['target_domain'] = 'Domínio de Destino:';
$lang['edit']['password'] = 'Senha:';
$lang['edit']['ratelimit'] = 'Volume de envios por hora:';
$lang['danger']['ratelimt_less_one'] = 'Limite da taxa de saída por hora não pode ser inferior a 1';
$lang['edit']['password_repeat'] = 'Confirmar senha (repetir):';
$lang['edit']['domain_admin'] = 'Editar administrador de domínio';
$lang['edit']['domain'] = 'Editar domínio';
$lang['edit']['alias_domain'] = 'Encaminhar domínio';
$lang['edit']['edit_alias_domain'] = 'Editar encaminhamento de domínio';
$lang['edit']['domains'] = 'Domínios';
$lang['edit']['destroy'] = 'Inserir manualmente';
$lang['edit']['alias'] = 'Editar apelido';
$lang['edit']['mailbox'] = 'Editar conta';
$lang['edit']['description'] = 'Descrição:';
$lang['edit']['max_aliases'] = 'Máximo apelidos:';
$lang['edit']['max_quota'] = 'Máximo espaço por conta (MiB):';
$lang['edit']['domain_quota'] = 'Espaço do domínio:';
$lang['edit']['backup_mx_options'] = 'Opções de Backup MX:';
$lang['edit']['relay_domain'] = 'Relay de domínio';
$lang['edit']['relay_all'] = 'Relay para todas as contas';
$lang['edit']['dkim_signature'] = 'Assinatura DKIM:';
$lang['edit']['dkim_record_info'] = '<small>Adicione um registro TXT com o mesmo a mesma configuração dos registros DNS.</small>';
$lang['edit']['relay_all_info'] = '<small>Se você escolher <b>não</b> direcionar todas as contas de email, você deve adicionar um ("blind") para cada uma das contas.</small>';
$lang['edit']['full_name'] = 'Nome completo';
$lang['edit']['quota_mb'] = 'Espaço (MiB)';
$lang['edit']['sender_acl'] = 'Permitir Enviar como';
$lang['edit']['sender_acl_info'] = 'Apelidos não podem ser removidos.';
$lang['edit']['dkim_txt_name'] = 'Nome do registro TXT:';
$lang['edit']['dkim_txt_value'] = 'Valor do registro TXT:';
$lang['edit']['previous'] = 'Voltar';
$lang['edit']['unchanged_if_empty'] = 'Deixar em branco para não modificar';
$lang['edit']['dont_check_sender_acl'] = 'Não verificar o remetente para o domínio %s';
$lang['add']['title'] = 'Adicionar objeto';
$lang['add']['domain'] = 'Domínio';
$lang['add']['active'] = 'Ativo';
$lang['add']['save'] = 'Salvar';
$lang['add']['description'] = 'Descrição:';
$lang['add']['max_aliases'] = 'Máximo de apelidos:';
$lang['add']['max_mailboxes'] = 'Máximo de contas:';
$lang['add']['mailbox_quota_m'] = 'Máximo espaço por conta (MiB):';
$lang['add']['domain_quota_m'] = 'Total de espaço por domínio(MiB):';
$lang['add']['backup_mx_options'] = 'Opções Backup MX:';
$lang['add']['relay_all'] = 'Relay para todas as contas';
$lang['add']['relay_domain'] = 'Relay para todo domínio';
$lang['add']['relay_all_info'] = '<small>Se <b>não</b> selecionar para retransmitir todas as contas, você deve adicionar uma ("blind") para cada conta que será direcionada.</small>';
$lang['add']['alias'] = 'Apelido(s)';
$lang['add']['alias_spf_fail'] = '<b>Aviso:</b> Se você escolher uma conta externa, o <b>servidor externo</b> poderá rejeitar algumas mensagens por erro de SPF.</a>';
$lang['add']['alias_address'] = 'Apelidos:';
$lang['add']['alias_address_info'] = '<small>Endereço de email completo ou @example.com, para uma conta coringa -catch all. (separado por vírgula). <b>apenas domínios cadastrados</b>.</small>';
$lang['add']['alias_domain_info'] = '<small>Domínios válidos apenas (separado por vírgulas).</small>';
$lang['add']['target_address'] = 'Encaminhar para:';
$lang['add']['target_address_info'] = '<small>Endereço de email completo (separado por vírgulas).</small>';
$lang['add']['alias_domain'] = 'Encaminhamento de Domínio';
$lang['add']['select'] = 'Selecione...';
$lang['add']['target_domain'] = 'Domínio de Destino:';
$lang['add']['mailbox'] = 'Conta';
$lang['add']['mailbox_username'] = 'Usuário (primeira parte do endereço de email):';
$lang['add']['full_name'] = 'Nome:';
$lang['add']['quota_mb'] = 'Espaço (MiB):';
$lang['add']['select_domain'] = 'Selecione um domínio antes';
$lang['add']['password'] = 'Senha:';
$lang['add']['password_repeat'] = 'Confirmar a senha (repetir):';
$lang['add']['previous'] = 'Voltar';
$lang['login']['title'] = 'Entrar';
$lang['login']['administration'] = 'Administração';
$lang['login']['administration_details'] = 'Utilize o login de Administrador para efetuar tarefas de administração.';
$lang['login']['user_settings'] = 'Configuração do usuário';
$lang['login']['user_settings_details'] = 'Usuários podem utilizar o Mailcow UI para alterar suas senhas, criar apelidos temporários (Apelido Anti-Spam), adjustar a sensibilidade do filtro the spam ou importar mensagens de um servidor IMAP.';
$lang['login']['username'] = 'Usuário';
$lang['login']['password'] = 'Senha';
$lang['login']['reset_password'] = 'Esqueci minha senha';
$lang['login']['login'] = 'Entrar';
$lang['login']['previous'] = "Voltar";
$lang['login']['delayed'] = 'Sua entrada será atrasada por %s segundos.';
$lang['login']['tfa'] = "Autenticação em duas etapas";
$lang['login']['tfa_details'] = "Confirme sua senha no campo abaixo";
$lang['login']['confirm'] = "Confirmar";
$lang['login']['otp'] = "Senha única";
$lang['login']['trash_login'] = "Tentativas de entrada";
$lang['admin']['search_domain_da'] = 'Selecione o(s) domínio(s)';
$lang['admin']['restrictions'] = 'Postifx Restrictions';
$lang['admin']['rr'] = 'Postifx Recipient Restrictions';
$lang['admin']['sr'] = 'Postifx Sender Restrictions';
$lang['admin']['reset_defaults'] = 'Voltar configuração padrão';
$lang['admin']['sr'] = 'Postifx Sender Restrictions';
$lang['admin']['r_inactive'] = 'Inactive restrictions';
$lang['admin']['r_active'] = 'Active restrictions';
$lang['admin']['r_info'] = 'Greyed out/disabled elements on the list of active restrictions are not known as valid restrictions to mailcow and cannot be moved. Unknown restrictions will be set in order of appearance anyway. <br />You can add new elements in <code>inc/vars.inc.php</code> to be able to toggle them.';
$lang['admin']['public_folders'] = 'Pastas públicas';
$lang['admin']['public_folders_text'] = 'A pasta "Public" esta criada. Abaixo a pasta pública indica o nome da primeira pasta criada automaticamente na conta, com este nome.';
$lang['admin']['public_folder_name'] = 'Nome da Pasta <small>(alfa numérico)</small>';
$lang['admin']['public_folder_enable'] = 'Habilitar Pasta Pública';
$lang['admin']['public_folder_enable_text'] = 'Ao alterar esta configuração os emails das pastas públicas não serão apagados.';
$lang['admin']['public_folder_pusf'] = 'Habilitar visualização por usuário';
$lang['admin']['public_folder_pusf_text'] = 'A "per-user seen flag"-enabled system will not mark a mail as read for User B, when User A has seen it, but User B did not.';
$lang['admin']['privacy'] = 'Privacidade';
$lang['admin']['privacy_text'] = 'Esta opção habilita a tabela PCRE para remover "User-Agent", "X-Enigmail", "X-Mailer", "X-Originating-IP" e substitui pelo Header "Received: from" localhost/127.0.0.1.';
$lang['admin']['privacy_anon_mail'] = 'Limpar o Header dos emails de saída';
$lang['admin']['dkim_txt_name'] = 'Registro TXT:';
$lang['admin']['dkim_txt_value'] = 'Valor do TXT:';
$lang['admin']['dkim_key_length'] = 'Tamanho do registro DKIM (bits)';
$lang['admin']['previous'] = 'Voltar';
$lang['admin']['quota_mb'] = 'Espaço (MiB):';
$lang['admin']['sender_acl'] = 'Permitir Enviar como:';
$lang['admin']['msg_size'] = 'Tamanho da mensagem';
$lang['admin']['msg_size_limit'] = 'Tamanho limite de mensagem atual';
$lang['admin']['msg_size_limit_details'] = 'Ao aplicar um novo limite os Serviços de Email e Web serão reiniciados.';
$lang['admin']['save'] = 'Salvar';
$lang['admin']['maintenance'] = 'Manutenção e Informação';
$lang['admin']['sys_info'] = 'Informações de Sistema';
$lang['admin']['dkim_add_key'] = 'Adicionar registro DKIM';
$lang['admin']['dkim_keys'] = 'Registro DKIM';
$lang['admin']['add'] = 'Salvar';
$lang['admin']['configuration'] = 'Configuração';
$lang['admin']['password'] = 'Senha';
$lang['admin']['password_repeat'] = 'Confirmar senha (repetir)';
$lang['admin']['active'] = 'Ativo';
$lang['admin']['action'] = 'Ação';
$lang['admin']['add_domain_admin'] = 'Adicionar administrador de domínio(s)';
$lang['admin']['admin_domains'] = 'Acesso aos Domínios';
$lang['admin']['domain_admins'] = 'Administradores de domínio';
$lang['admin']['username'] = 'Administrador';
$lang['admin']['edit'] = 'Editar';
$lang['admin']['remove'] = 'Remover';
$lang['admin']['save'] = 'Salvar';
$lang['admin']['admin'] = 'Administrador';
$lang['admin']['admin_details'] = 'Editar informações do administrator';
$lang['admin']['unchanged_if_empty'] = 'Deixar em branco para não alterar';
$lang['admin']['yes'] = '&#10004;';
$lang['admin']['no'] = '&#10008;';
$lang['admin']['access'] = 'Acessos';
$lang['admin']['site_not_found'] = 'Não foi possível localizar as configuração do site Mailcow';
$lang['admin']['set_rr_failed'] = 'Não foi possível alterar Postfix Restrictions';
$lang['admin']['no_record'] = 'Nenhum registro';
?>
