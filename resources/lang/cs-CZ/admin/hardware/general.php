<?php

return [
    'about_assets_title'           => 'O majetku',
    'about_assets_text'            => 'Majetky jsou položky sledované sériovým číslem nebo značkou. Mají tendenci mít vyšší hodnotou, tam kde je důležitá identifikace určité položky.',
    'archived'  				=> 'Archivováno',
    'asset'  					=> 'Majetek',
    'bulk_checkout'             => 'Vyskladnit majetek',
    'bulk_checkin'              => 'Převzít majetek',
    'checkin'  					=> 'Převzít majetek',
    'checkout'  				=> 'Pokladní majetek',
    'clone'  					=> 'Klonovat majetek',
    'deployable'  				=> 'Připraveno k nasazení',
    'deleted'  					=> 'Tento majetek byl odstraněn.',
    'delete_confirm'            => 'Opravdu chcete odstranit tuto položku?',
    'edit'  					=> 'Upravit majetek',
    'model_deleted'  			=> 'Tento model majetku byl odstraněn. Před obnovením majetku musíte model obnovit.',
    'model_invalid'             => 'Model tohoto majetku je neplatný.',
    'model_invalid_fix'         => 'Měli byste tento majetek upravit dříve, než jej vydáte, či přijmete.',
    'requestable'               => 'Lze vyžádat',
    'requested'				    => 'Požadováno',
    'not_requestable'           => 'Nelze vyžádat',
    'requestable_status_warning' => 'Neměnit stav K vyžádání',
    'restore'  					=> 'Obnovit zařízení',
    'pending'  					=> 'Čekající',
    'undeployable'  			=> 'Nelze vyskladnit',
    'undeployable_tooltip'  	=> 'Tento majetek je ve stavu, který neumožňuje nasazení, a nemůže tak být vydán.',
    'view'  					=> 'Zobrazit majetek',
    'csv_error' => 'Máte chybu v souboru CSV:',
    'import_text' => '<p>Nahrajte CSV, který obsahuje historii aktiv. Aktiva a uživatelé MUSÍ již v systému existovat, nebo budou přeskočeni. Odpovídající aktiva pro import historie se odehrávají proti značce majetku. Pokusíme se najít odpovídající uživatele na základě jména uživatele, které zadáte, a kritérií, která vyberete níže. Pokud nevyberete žádná kritéria níže, se jednoduše pokusí shodnout se ve formátu uživatelského jména, který jste nakonfigurovali v <code>Admin &gt; Obecné nastavení</code>.</p><p>Pole zahrnutá do CSV musí odpovídat hlavičkám: <strong>Štítek majetku, jméno, datum platby, datum platby</strong>. Všechna další pole budou ignorována. </p><p>Datum zaškrtnutí: prázdná nebo budoucí data zaškrtnutí zaškrtněte položky pro přidruženého uživatele. S výjimkou sloupce Datum zaškrtnutí vytvoří datum zaškrtnutí s datumem.</p>
    ',
    'csv_import_match_f-l' => 'Pokuste se porovnat uživatele podle formátu <strong>firstname.lastname</strong> (<code>jane.smith</code>)',
    'csv_import_match_initial_last' => 'Pokuste se porovnat uživatele podle formátu <strong>první počáteční příjmení</strong> (<code>jsmith</code>)',
    'csv_import_match_first' => 'Try to match users by <strong>first name</strong> (<code>jane</code>) format',
    'csv_import_match_email' => 'Pokuste se porovnat uživatele pomocí <strong>e-mailu</strong> jako uživatelské jméno',
    'csv_import_match_username' => 'Pokuste se porovnat uživatele pomocí <strong>uživatelského jména</strong>',
    'error_messages' => 'Chybové zprávy:',
    'success_messages' => 'Úspěšné zprávy:',
    'alert_details' => 'Podrobnosti naleznete níže.',
    'custom_export' => 'Uživatelsky definovaný export',
    'mfg_warranty_lookup' => 'Vyhledávání stavu záruky :manufacturer',
    'user_department' => 'Oddělení',
];
