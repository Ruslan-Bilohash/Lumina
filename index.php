<?php
session_start();
// ====================== 9 ЯЗЫКОВ ======================
$translations = [
    'ru' => [
        'app_name' => 'Lumina',
        'version' => '2.2',
        'login_title' => 'Вход — Lumina',
        'password' => 'Пароль',
        'open_manager' => 'Открыть менеджер',
        'logout' => 'Выход',
        'space' => 'Место',
        'home' => 'Главная',
        'select_all' => 'Выделить всё',
        'copy' => 'Копировать',
        'paste' => 'Вставить',
        'cut' => 'Вырезать',
        'save' => 'Сохранить',
        'cancel' => 'Отмена',
        'file_saved' => '✅ Файл успешно сохранён',
        'copied' => '📋 Текст скопирован',
        'cut_text' => '✂️ Текст вырезан',
        'pasted' => '📋 Вставлено',
        'upload_success' => '✅ Файлы загружены',
        'upload_error' => '❌ Ошибка загрузки',
        'help_title' => 'Справка',
        'help_text' => "Lumina — удобный файловый менеджер для любых устройств.\n\n• Главная — вернуться в корень\n• Нажми папку — открыть\n• Нажми файл — редактировать",
        'footer' => 'Lumina v2.2 Multilang • ',
        'back' => 'Назад'
    ],
    'uk' => [
        'app_name' => 'Lumina',
        'version' => '2.2',
        'login_title' => 'Вхід — Lumina',
        'password' => 'Пароль',
        'open_manager' => 'Відкрити менеджер',
        'logout' => 'Вихід',
        'space' => 'Місце',
        'home' => 'Головна',
        'select_all' => 'Виділити все',
        'copy' => 'Копіювати',
        'paste' => 'Вставити',
        'cut' => 'Вирізати',
        'save' => 'Зберегти',
        'cancel' => 'Скасувати',
        'file_saved' => '✅ Файл успішно збережено',
        'copied' => '📋 Текст скопійовано',
        'cut_text' => '✂️ Текст вирізано',
        'pasted' => '📋 Вставлено',
        'upload_success' => '✅ Файли завантажено',
        'upload_error' => '❌ Помилка завантаження',
        'help_title' => 'Довідка',
        'help_text' => "Lumina — зручний файловий менеджер для будь-яких пристроїв.\n\n• Головна — повернутися в корінь\n• Натисни папку — відкрити\n• Натисни файл — редагувати",
        'footer' => 'Lumina v2.2 Multilang • ',
        'back' => 'Назад'
    ],
    'en' => [
        'app_name' => 'Lumina',
        'version' => '2.2',
        'login_title' => 'Login — Lumina',
        'password' => 'Password',
        'open_manager' => 'Open Manager',
        'logout' => 'Logout',
        'space' => 'Space',
        'home' => 'Home',
        'select_all' => 'Select All',
        'copy' => 'Copy',
        'paste' => 'Paste',
        'cut' => 'Cut',
        'save' => 'Save',
        'cancel' => 'Cancel',
        'file_saved' => '✅ File saved',
        'copied' => '📋 Text copied',
        'cut_text' => '✂️ Text cut',
        'pasted' => '📋 Pasted',
        'upload_success' => '✅ Files uploaded',
        'upload_error' => '❌ Upload error',
        'help_title' => 'Help',
        'help_text' => "Lumina — convenient file manager for any devices.\n\n• Home button — go to root\n• Tap folder to open\n• Tap file to edit",
        'footer' => 'Lumina v2.2 Multilang • ',
        'back' => 'Back'
    ],
    'de' => [
        'app_name' => 'Lumina',
        'version' => '2.2',
        'login_title' => 'Anmelden — Lumina',
        'password' => 'Passwort',
        'open_manager' => 'Manager öffnen',
        'logout' => 'Abmelden',
        'space' => 'Speicher',
        'home' => 'Start',
        'select_all' => 'Alles auswählen',
        'copy' => 'Kopieren',
        'paste' => 'Einfügen',
        'cut' => 'Ausschneiden',
        'save' => 'Speichern',
        'cancel' => 'Abbrechen',
        'file_saved' => '✅ Datei gespeichert',
        'copied' => '📋 Text kopiert',
        'cut_text' => '✂️ Text ausgeschnitten',
        'pasted' => '📋 Eingefügt',
        'upload_success' => '✅ Dateien hochgeladen',
        'upload_error' => '❌ Upload-Fehler',
        'help_title' => 'Hilfe',
        'help_text' => "Lumina — bequemer Dateimanager für alle Geräte.\n\n• Home-Taste — zum Root\n• Ordner antippen\n• Datei antippen zum Bearbeiten",
        'footer' => 'Lumina v2.2 Multilang • ',
        'back' => 'Zurück'
    ],
    'pl' => [
        'app_name' => 'Lumina',
        'version' => '2.2',
        'login_title' => 'Logowanie — Lumina',
        'password' => 'Hasło',
        'open_manager' => 'Otwórz menedżer',
        'logout' => 'Wyloguj',
        'space' => 'Miejsce',
        'home' => 'Główna',
        'select_all' => 'Zaznacz wszystko',
        'copy' => 'Kopiuj',
        'paste' => 'Wklej',
        'cut' => 'Wytnij',
        'save' => 'Zapisz',
        'cancel' => 'Anuluj',
        'file_saved' => '✅ Plik zapisany',
        'copied' => '📋 Tekst skopiowany',
        'cut_text' => '✂️ Tekst wycięty',
        'pasted' => '📋 Wklejono',
        'upload_success' => '✅ Pliki przesłane',
        'upload_error' => '❌ Błąd przesyłania',
        'help_title' => 'Pomoc',
        'help_text' => "Lumina — wygodny menedżer plików dla wszystkich urządzeń.\n\n• Przycisk Główna — powrót do root\n• Dotknij folderu\n• Dotknij pliku by edytować",
        'footer' => 'Lumina v2.2 Multilang • ',
        'back' => 'Wstecz'
    ],
    'lt' => [
        'app_name' => 'Lumina',
        'version' => '2.2',
        'login_title' => 'Prisijungimas — Lumina',
        'password' => 'Slaptažodis',
        'open_manager' => 'Atidaryti tvarkyklę',
        'logout' => 'Atsijungti',
        'space' => 'Vieta',
        'home' => 'Pagrindinis',
        'select_all' => 'Pasirinkti visus',
        'copy' => 'Kopijuoti',
        'paste' => 'Įklijuoti',
        'cut' => 'Iškirpti',
        'save' => 'Išsaugoti',
        'cancel' => 'Atšaukti',
        'file_saved' => '✅ Failas išsaugotas',
        'copied' => '📋 Tekstas nukopijuotas',
        'cut_text' => '✂️ Tekstas iškirstas',
        'pasted' => '📋 Įklijuota',
        'upload_success' => '✅ Failai įkelti',
        'upload_error' => '❌ Įkėlimo klaida',
        'help_title' => 'Pagalba',
        'help_text' => "Lumina — patogus failų tvarkytuvas visiems įrenginiams.\n\n• Mygtukas Pagrindinis — grįžti į šaknį\n• Bakstelėkite aplanką\n• Bakstelėkite failą redaguoti",
        'footer' => 'Lumina v2.2 Multilang • ',
        'back' => 'Atgal'
    ],
    'no' => [
        'app_name' => 'Lumina',
        'version' => '2.2',
        'login_title' => 'Logg inn — Lumina',
        'password' => 'Passord',
        'open_manager' => 'Åpne filbehandler',
        'logout' => 'Logg ut',
        'space' => 'Lagringsplass',
        'home' => 'Hjem',
        'select_all' => 'Velg alle',
        'copy' => 'Kopier',
        'paste' => 'Lim inn',
        'cut' => 'Klipp ut',
        'save' => 'Lagre',
        'cancel' => 'Avbryt',
        'file_saved' => '✅ Fil lagret',
        'copied' => '📋 Tekst kopiert',
        'cut_text' => '✂️ Tekst klippet ut',
        'pasted' => '📋 Limt inn',
        'upload_success' => '✅ Filer lastet opp',
        'upload_error' => '❌ Opplastingsfeil',
        'help_title' => 'Hjelp',
        'help_text' => "Lumina — praktisk filbehandler for alle enheter.\n\n• Hjem-knapp — tilbake til rot\n• Trykk på mappe\n• Trykk på fil for å redigere",
        'footer' => 'Lumina v2.2 Multilang • ',
        'back' => 'Tilbake'
    ],
    'sv' => [
        'app_name' => 'Lumina',
        'version' => '2.2',
        'login_title' => 'Logga in — Lumina',
        'password' => 'Lösenord',
        'open_manager' => 'Öppna filhanterare',
        'logout' => 'Logga ut',
        'space' => 'Utrymme',
        'home' => 'Hem',
        'select_all' => 'Markera alla',
        'copy' => 'Kopiera',
        'paste' => 'Klistra in',
        'cut' => 'Klipp ut',
        'save' => 'Spara',
        'cancel' => 'Avbryt',
        'file_saved' => '✅ Fil sparad',
        'copied' => '📋 Text kopierad',
        'cut_text' => '✂️ Text klippt ut',
        'pasted' => '📋 Klistrat in',
        'upload_success' => '✅ Filer uppladdade',
        'upload_error' => '❌ Uppladdningsfel',
        'help_title' => 'Hjälp',
        'help_text' => "Lumina — bekväm filhanterare för alla enheter.\n\n• Hem-knappen — tillbaka till rot\n• Tryck på mapp\n• Tryck på fil för att redigera",
        'footer' => 'Lumina v2.2 Multilang • ',
        'back' => 'Tillbaka'
    ],
    'ka' => [
        'app_name' => 'Lumina',
        'version' => '2.2',
        'login_title' => 'შესვლა — Lumina',
        'password' => 'პაროლი',
        'open_manager' => 'გახსენი მმართველი',
        'logout' => 'გამოსვლა',
        'space' => 'ადგილი',
        'home' => 'მთავარი',
        'select_all' => 'ყველაფერი აირჩიე',
        'copy' => 'კოპირება',
        'paste' => 'ჩასმა',
        'cut' => 'ამოჭრა',
        'save' => 'შენახვა',
        'cancel' => 'გაუქმება',
        'file_saved' => '✅ ფაილი შენახულია',
        'copied' => '📋 ტექსტი კოპირებულია',
        'cut_text' => '✂️ ტექსტი ამოჭრილია',
        'pasted' => '📋 ჩასმულია',
        'upload_success' => '✅ ფაილები აიტვირთა',
        'upload_error' => '❌ ატვირთვის შეცდომა',
        'help_title' => 'დახმარება',
        'help_text' => "Lumina — მოსახერხებელი ფაილების მმართველი ყველა მოწყობილობისთვის.\n\n• ღილაკი მთავარი — დაბრუნდება ძირში\n• დააჭირეთ საქაღალდეს\n• დააჭირეთ ფაილს რედაქტირებისთვის",
        'footer' => 'Lumina v2.2 Multilang • ',
        'back' => 'უკან'
    ]
];
$languages = [
    'ru' => ['flag' => '🇷🇺', 'name' => 'Русский'],
    'uk' => ['flag' => '🇺🇦', 'name' => 'Українська'],
    'en' => ['flag' => '🇬🇧', 'name' => 'English'],
    'de' => ['flag' => '🇩🇪', 'name' => 'Deutsch'],
    'pl' => ['flag' => '🇵🇱', 'name' => 'Polski'],
    'lt' => ['flag' => '🇱🇹', 'name' => 'Lietuvių'],
    'no' => ['flag' => '🇳🇴', 'name' => 'Norsk'],
    'sv' => ['flag' => '🇸🇪', 'name' => 'Svenska'],
    'ka' => ['flag' => '🇬🇪', 'name' => 'ქართული'],
];
function t($key) {
    global $translations;
    $lang = $_SESSION['lang'] ?? 'ru';
    return $translations[$lang][$key] ?? $translations['ru'][$key] ?? $key;
}
// ====================== CSP ======================
header("Content-Security-Policy: default-src 'self' 'unsafe-inline' 'unsafe-eval'; script-src 'self' 'unsafe-inline' 'unsafe-eval'; style-src 'self' 'unsafe-inline';");
// ====================== ЛОГИН ======================
$PASSWORD = "admin123";
$TITLE = t('app_name');
if (isset($_GET['logout'])) { session_destroy(); header("Location: " . $_SERVER['PHP_SELF']); exit; }
if (isset($_POST['login'])) { if ($_POST['password'] === $PASSWORD) $_SESSION['logged_in'] = true; }
if (!isset($_SESSION['logged_in'])) {
    echo '<!DOCTYPE html><html lang="'.($_SESSION['lang']??'ru').'"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>'.t('login_title').'</title>';
    echo '<script src="https://cdn.tailwindcss.com"></script><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />';
    echo '</head><body class="bg-white text-zinc-900 min-h-screen flex items-center justify-center p-6">';
    echo '<div class="w-full max-w-[380px] text-center"><span class="material-symbols-outlined text-[130px] text-blue-500">folder_open</span>';
    echo '<h1 class="text-5xl font-bold tracking-tight mt-4">'.$TITLE.'</h1><p class="text-zinc-500 mt-2">v'.t('version').'</p>';
    echo '<form method="POST" class="mt-10"><input type="password" name="password" placeholder="'.t('password').'" class="w-full bg-white border border-zinc-300 focus:border-blue-500 rounded-3xl px-8 py-6 text-2xl text-center outline-none">';
    echo '<button type="submit" name="login" class="mt-6 w-full bg-blue-600 hover:bg-blue-500 active:scale-95 py-6 rounded-3xl text-2xl font-semibold">'.t('open_manager').'</button></form></div></body></html>';
    exit;
}
// ====================== ЯЗЫК ======================
if (isset($_GET['lang'])) { $_SESSION['lang'] = $_GET['lang']; header("Location: " . $_SERVER['PHP_SELF']); exit; }
$lang = $_SESSION['lang'] ?? 'ru';
// ====================== AJAX ======================
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    header('Content-Type: application/json');
    $action = $_POST['action'];
    $rel = $_POST['relpath'] ?? '';
    $base = realpath(__DIR__);
    $target = realpath($base . ($rel ? '/' . $rel : ''));
    if (!$target || strpos($target, $base) !== 0) {
        echo json_encode(['success' => false, 'msg' => 'Доступ заборонено']);
        exit;
    }
    switch ($action) {
        case 'list':
            $items = [];
            foreach (scandir($target) as $f) {
                if ($f === '.' || $f === '..') continue;
                $p = $target . '/' . $f;
                $items[] = ['name' => $f, 'dir' => is_dir($p), 'size' => is_dir($p) ? 0 : filesize($p), 'ext' => strtolower(pathinfo($f, PATHINFO_EXTENSION))];
            }
            usort($items, fn($a, $b) => $b['dir'] <=> $a['dir'] ?: strcasecmp($a['name'], $b['name']));
            echo json_encode(['success' => true, 'items' => $items]);
            break;
        case 'getfile':
            $content = file_exists($target) ? file_get_contents($target) : '';
            echo json_encode(['success' => true, 'content' => $content]);
            break;
        case 'save':
            if (file_put_contents($target, $_POST['content'] ?? '') !== false) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'msg' => 'Помилка запису']);
            }
            break;
        case 'mkdir':
            $name = trim($_POST['name'] ?? '');
            if ($name) mkdir($target . '/' . $name, 0755, true);
            echo json_encode(['success' => true]);
            break;
        case 'mkfile':
            $name = trim($_POST['name'] ?? '');
            if ($name) file_put_contents($target . '/' . $name, '');
            echo json_encode(['success' => true]);
            break;
        case 'rename':
            $old = $_POST['old'] ?? '';
            $new = trim($_POST['new'] ?? '');
            if ($old && $new) rename($target . '/' . $old, $target . '/' . $new);
            echo json_encode(['success' => true]);
            break;
        case 'delete':
            $name = $_POST['name'] ?? '';
            if ($name) {
                $p = $target . '/' . $name;
                if (is_dir($p)) {
                    function rrmdir($dir) {
                        foreach (scandir($dir) as $f) if ($f !== '.' && $f !== '..') { $fp = $dir . '/' . $f; is_dir($fp) ? rrmdir($fp) : unlink($fp); }
                        rmdir($dir);
                    }
                    rrmdir($p);
                } else unlink($p);
            }
            echo json_encode(['success' => true]);
            break;
        case 'upload':
            $count = 0;
            if (isset($_FILES['files'])) {
                foreach ($_FILES['files']['tmp_name'] as $k => $tmp) {
                    if ($tmp && $_FILES['files']['error'][$k] === 0) {
                        $dest = $target . '/' . basename($_FILES['files']['name'][$k]);
                        if (move_uploaded_file($tmp, $dest)) $count++;
                    }
                }
            }
            echo json_encode(['success' => true, 'uploaded' => $count]);
            break;
    }
    exit;
}
// ====================== DISK USAGE ======================
$total_space = disk_total_space(__DIR__);
$free_space = disk_free_space(__DIR__);
$used_percent = $total_space ? round((($total_space - $free_space) / $total_space) * 100, 1) : 0;
$used_gb = round(($total_space - $free_space) / 1024 / 1024 / 1024, 2);
$total_gb = round($total_space / 1024 / 1024 / 1024, 2);
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title><?= t('app_name') ?> — Modern File Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {font-family: 'Inter', system-ui, sans-serif;}
        .safe-top { padding-top: max(1.25rem, env(safe-area-inset-top)); }
        .safe-bottom { padding-bottom: max(1.25rem, env(safe-area-inset-bottom)); }
       
        .list-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 15px 18px;
            background: #ffffff;
            border-bottom: 1px solid #f1f5f9;
            min-height: 72px;
            transition: background 0.2s;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .list-item:active {background:#f8fafc;}
       
        .list-name-btn {
            flex: 1;
            text-align: left;
            font-size: 17.5px;
            font-weight: 500;
            line-height: 1.35;
            padding: 8px 12px;
            border-radius: 14px;
            transition: all 0.25s;
        }
        .list-name-btn:active {
            background: #3b82f6;
            color: white;
            transform: scale(0.97);
        }
       
        #editorTA {font-family:ui-monospace,"SF Mono",Menlo,Consolas,monospace;font-size:21px;line-height:1.65;background:#ffffff;color:#111827;padding:25px 18px;width:100%;height:100%;border:none;outline:none;resize:none;caret-color:#22d3ee;}
        #toast {position:fixed;bottom:120px;left:50%;transform:translateX(-50%);padding:14px 26px;border-radius:9999px;font-size:15px;font-weight:600;z-index:99999;box-shadow:0 25px 50px -12px rgb(0 0 0 / 0.15);transition:all 0.3s cubic-bezier(0.4,0,0.2,1);opacity:0;pointer-events:none;}
        
        /* Іконки в шапці */
        .header-btn {
            width: 48px; height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 9999px;
            transition: all 0.2s;
        }
        .header-btn:hover { background-color: #f1f5f9; transform: scale(1.1); }
        .header-btn:active { background-color: #e0f2fe; }
    </style>
</head>
<body class="bg-white text-zinc-900 min-h-screen pb-20">
    <!-- ==================== ШАПКА З ІКОНКАМИ ==================== -->
    <header class="fixed top-0 inset-x-0 bg-white border-b border-zinc-200 z-50 safe-top shadow-sm">
        <div class="px-5 py-3 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-blue-500 text-3xl">folder_open</span>
                <div>
                    <div class="font-bold text-2xl tracking-tighter"><?= t('app_name') ?></div>
                    <div class="text-[10px] text-zinc-500 -mt-1">v<?= t('version') ?></div>
                </div>
            </div>
            <!-- КНОПКИ ТІЛЬКИ ІКОНКИ -->
            <div class="flex items-center gap-1">
                <button onclick="newFolder()" class="header-btn text-3xl text-amber-500" title="Нова папка">
                    <span class="material-symbols-outlined">create_new_folder</span>
                </button>
                <button onclick="newFile()" class="header-btn text-3xl text-emerald-500" title="Новий файл">
                    <span class="material-symbols-outlined">note_add</span>
                </button>
                <button onclick="triggerUpload()" class="header-btn text-3xl text-blue-500" title="Завантажити файли">
                    <span class="material-symbols-outlined">upload_file</span>
                </button>
                <a href="?logout=1" class="header-btn text-3xl text-red-500 ml-3" title="Вихід">
                    <span class="material-symbols-outlined">logout</span>
                </a>
            </div>
        </div>
    </header>

    <div class="pt-20 px-4">
        <div id="grid" class="flex flex-col"></div>
    </div>

    <!-- СКРИТИЙ ІНПУТ ЗАВАНТАЖЕННЯ -->
    <input type="file" id="fileUpload" multiple style="display: none;" onchange="handleUpload(this.files)">

    <!-- РЕДАКТОР -->
    <div id="editorModal" class="hidden fixed inset-0 bg-white z-[999] flex flex-col">
        <div class="bg-white border-b border-zinc-200 px-5 py-4 flex items-center justify-between shadow-sm">
            <button onclick="closeEditor()" class="material-symbols-outlined text-4xl text-zinc-500">arrow_back</button>
            <div id="fileTitle" class="font-semibold text-lg text-center flex-1 truncate px-4"></div>
            <div class="flex items-center gap-6 text-3xl">
                <button onclick="selectAllEditor()" class="material-symbols-outlined text-zinc-600">select_all</button>
                <button onclick="copyEditor()" class="material-symbols-outlined text-zinc-600">content_copy</button>
                <button onclick="pasteEditor()" class="material-symbols-outlined text-zinc-600">content_paste</button>
                <button onclick="cutEditor()" class="material-symbols-outlined text-zinc-600">content_cut</button>
                <button onclick="saveEditor()" class="material-symbols-outlined text-emerald-500">save</button>
                <button onclick="closeEditor()" class="material-symbols-outlined text-red-500">close</button>
            </div>
        </div>
        <textarea id="editorTA" spellcheck="false" class="flex-1"></textarea>
    </div>

    <!-- МНОЖИННИЙ ВИБІР -->
    <div id="multiBar" class="hidden fixed bottom-0 inset-x-0 bg-white border-t border-zinc-200 p-4 flex items-center justify-between z-[100] safe-bottom shadow-2xl">
        <button onclick="deleteSelected()" class="bg-red-600 hover:bg-red-500 px-8 py-5 rounded-3xl font-semibold flex-1 text-white">Видалити вибране (<span id="selCount">0</span>)</button>
        <button onclick="clearSelection()" class="ml-4 text-zinc-500 font-medium px-6 py-5"><?= t('cancel') ?></button>
    </div>

    <!-- ШЛЯХ + МІСЦЕ -->
    <div class="px-5 pb-3 text-xs flex justify-between items-center text-zinc-500 border-t border-zinc-100">
        <div id="path" class="font-medium truncate max-w-[55%]">/</div>
        <button onclick="goHome()" class="flex items-center gap-2 text-blue-600 active:scale-95 transition">
            <span class="material-symbols-outlined text-4xl">home</span>
            <span class="font-medium text-lg"><?= t('home') ?></span>
        </button>
        <div><?= t('space') ?> <span class="text-zinc-900 font-medium"><?= $used_percent ?>%</span> • <?= $used_gb ?> / <?= $total_gb ?> GiB</div>
    </div>

    <!-- ФУТЕР -->
    <footer class="fixed bottom-0 inset-x-0 bg-white border-t border-zinc-200 text-center py-3 text-xs text-zinc-500 safe-bottom flex items-center justify-between px-5">
        <div><?= t('footer') ?>Всі права захищено</div>
        <select onchange="location='?lang='+this.value" class="bg-white border border-zinc-200 rounded-2xl px-4 py-2 text-lg font-medium">
            <?php foreach($languages as $code => $l): ?>
                <option value="<?= $code ?>" <?= $lang==$code?'selected':'' ?>><?= $l['flag'] ?> <?= $l['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </footer>

    <div id="toast"></div>

    <script>
        let currentPath = "";
        let editingFile = "";
        let selected = new Set();
        let currentTA = null;
        const backText = "<?= addslashes(t('back')) ?>";

        async function api(action, extra = {}) {
            const fd = new FormData();
            fd.append('action', action);
            fd.append('relpath', extra.relpath || currentPath);
            Object.keys(extra).forEach(k => { if (k !== 'relpath') fd.append(k, extra[k]); });
            const res = await fetch(window.location.href, {method: 'POST', body: fd});
            return res.json();
        }

        function triggerUpload() {
            document.getElementById('fileUpload').click();
        }

        async function handleUpload(files) {
            if (!files || files.length === 0) return;
            const fd = new FormData();
            fd.append('action', 'upload');
            fd.append('relpath', currentPath);
            for (let i = 0; i < files.length; i++) {
                fd.append('files[]', files[i]);
            }
            const res = await fetch(window.location.href, {method: 'POST', body: fd});
            const data = await res.json();
            if (data.success) {
                showToast(`<?= t('upload_success') ?> (${data.uploaded})`);
                loadFiles();
            } else {
                showToast(t('upload_error'));
            }
        }

        function getFileVisual(item) {
            if (item.dir) return {icon: 'folder', color: 'text-amber-500', badge: ''};
            const ext = item.ext.toLowerCase();
            const map = {
                'jpg': {icon: 'image', color: 'text-pink-500', badge: 'JPG'},
                'jpeg': {icon: 'image', color: 'text-pink-500', badge: 'JPG'},
                'png': {icon: 'image', color: 'text-pink-500', badge: 'PNG'},
                'gif': {icon: 'gif', color: 'text-pink-500', badge: 'GIF'},
                'webp': {icon: 'image', color: 'text-pink-500', badge: 'WEBP'},
                'svg': {icon: 'image', color: 'text-pink-500', badge: 'SVG'},
                'pdf': {icon: 'picture_as_pdf', color: 'text-red-500', badge: 'PDF'},
                'doc': {icon: 'description', color: 'text-blue-600', badge: 'DOC'},
                'docx': {icon: 'description', color: 'text-blue-600', badge: 'DOCX'},
                'xls': {icon: 'table_chart', color: 'text-emerald-600', badge: 'XLS'},
                'xlsx': {icon: 'table_chart', color: 'text-emerald-600', badge: 'XLSX'},
                'zip': {icon: 'folder_zip', color: 'text-orange-500', badge: 'ZIP'},
                'rar': {icon: 'folder_zip', color: 'text-orange-500', badge: 'RAR'},
                '7z': {icon: 'folder_zip', color: 'text-orange-500', badge: '7Z'},
                'tar': {icon: 'folder_zip', color: 'text-orange-500', badge: 'TAR'},
                'txt': {icon: 'description', color: 'text-zinc-500', badge: 'TXT'},
                'html': {icon: 'html', color: 'text-orange-400', badge: 'HTML'},
                'css': {icon: 'css', color: 'text-blue-400', badge: 'CSS'},
                'js': {icon: 'javascript', color: 'text-yellow-500', badge: 'JS'},
                'php': {icon: 'php', color: 'text-purple-500', badge: 'PHP'},
                'json': {icon: 'data_object', color: 'text-emerald-400', badge: 'JSON'}
            };
            return map[ext] || {icon: 'insert_drive_file', color: 'text-sky-500', badge: ext.toUpperCase() || 'FILE'};
        }

        function showToast(msg) {
            const t = document.getElementById('toast');
            t.textContent = msg;
            t.className = 'fixed bottom-24 left-1/2 -translate-x-1/2 px-8 py-4 rounded-3xl text-base font-semibold bg-emerald-600 text-white shadow-2xl transition-all';
            t.style.opacity = '1';
            setTimeout(() => t.style.opacity = '0', 2200);
        }

        function updateSelectionBar() {
            const bar = document.getElementById('multiBar');
            bar.classList.toggle('hidden', selected.size === 0);
            document.getElementById('selCount').textContent = selected.size;
        }

        function goBack() {
            if (!currentPath) return;
            const parts = currentPath.split('/').filter(Boolean);
            parts.pop();
            currentPath = parts.join('/');
            loadFiles();
        }

        function openFolder(name) {
            currentPath = currentPath ? currentPath + '/' + name : name;
            loadFiles();
        }

        async function loadFiles() {
            document.getElementById('path').textContent = currentPath ? '/' + currentPath : '/';
            const data = await api('list');
            const grid = document.getElementById('grid');
            grid.innerHTML = '';
            if (currentPath) {
                const backRow = document.createElement('div');
                backRow.className = 'list-item';
                backRow.innerHTML = `
                    <span class="material-symbols-outlined text-blue-500 text-[42px] flex-shrink-0">arrow_back_ios</span>
                    <button onclick="goBack();event.stopImmediatePropagation()" class="list-name-btn text-blue-600">.. ${backText}</button>
                `;
                grid.appendChild(backRow);
            }
            data.items.forEach(item => {
                const vis = getFileVisual(item);
                const row = document.createElement('div');
                row.className = 'list-item';
                row.innerHTML = `
                    <input type="checkbox" class="multi-check w-8 h-8 accent-blue-500 rounded-2xl" data-name="${item.name}" onchange="toggleSelect(this)">
                    <span class="material-symbols-outlined ${vis.color} text-[39px] flex-shrink-0">${vis.icon}</span>
                    <button onclick="${item.dir ? `openFolder('${item.name.replace(/'/g, "\\'")}')` : `openEditor('${item.name.replace(/'/g, "\\'")}')`}; event.stopImmediatePropagation()" class="list-name-btn">
                        ${item.name}
                    </button>
                    <div class="flex items-center gap-3 text-right flex-shrink-0">
                        ${vis.badge ? `<div class="bg-zinc-100 text-[10px] font-bold tracking-widest px-3 py-1 rounded-2xl text-zinc-700">${vis.badge}</div>` : ''}
                        ${!item.dir ? `<div class="text-xs text-zinc-500 font-medium whitespace-nowrap">${(item.size/1024).toFixed(1)} KB</div>` : ''}
                    </div>
                `;
                row.onclick = (e) => {
                    if (e.target.type === 'checkbox' || e.target.tagName === 'BUTTON') return;
                    const cb = row.querySelector('.multi-check');
                    cb.checked = !cb.checked;
                    toggleSelect(cb);
                };
                grid.appendChild(row);
            });
        }

        function toggleSelect(cb) {
            const name = cb.dataset.name;
            if (cb.checked) selected.add(name);
            else selected.delete(name);
            updateSelectionBar();
        }

        function clearSelection() {
            selected.clear();
            updateSelectionBar();
        }

        function deleteSelected() {
            if (selected.size === 0) return;
            if (!confirm(`Видалити ${selected.size} файлів?`)) return;
            let done = 0;
            selected.forEach(name => {
                api('delete', {name}).then(() => {
                    done++;
                    if (done === selected.size) {
                        showToast(`${selected.size} файлів видалено`);
                        selected.clear();
                        updateSelectionBar();
                        loadFiles();
                    }
                });
            });
        }

        async function openEditor(filename) {
            editingFile = currentPath ? currentPath + '/' + filename : filename;
            const data = await api('getfile', {relpath: editingFile});
            document.getElementById('editorModal').classList.remove('hidden');
            document.getElementById('fileTitle').textContent = filename;
            currentTA = document.getElementById('editorTA');
            currentTA.value = data.content || '';
            currentTA.focus();
        }

        function closeEditor() {
            document.getElementById('editorModal').classList.add('hidden');
        }

        async function saveEditor() {
            if (!currentTA) return;
            const res = await api('save', {relpath: editingFile, content: currentTA.value});
            if (res.success) showToast(t('file_saved'));
            else showToast("❌ " + (res.msg || 'Помилка'));
        }

        function selectAllEditor() { if (currentTA) { currentTA.select(); showToast(t('select_all')); }}
        function copyEditor() { if (currentTA) { navigator.clipboard.writeText(currentTA.value); showToast(t('copied')); }}
        function cutEditor() { if (currentTA) { navigator.clipboard.writeText(currentTA.value); currentTA.value = ''; showToast(t('cut_text')); }}
        async function pasteEditor() {
            if (currentTA) {
                const text = await navigator.clipboard.readText();
                const start = currentTA.selectionStart;
                currentTA.value = currentTA.value.substring(0, start) + text + currentTA.value.substring(currentTA.selectionEnd);
                currentTA.selectionStart = currentTA.selectionEnd = start + text.length;
                showToast(t('pasted'));
            }
        }

        function newFolder() {
            const name = prompt("Назва нової папки:");
            if (name) api('mkdir', {name}).then(() => loadFiles());
        }

        function newFile() {
            const name = prompt("Ім'я нового файлу (з розширенням):");
            if (name) api('mkfile', {name}).then(() => loadFiles());
        }

        function goHome() {
            currentPath = "";
            loadFiles();
        }

        // Запуск
        loadFiles();
    </script>
</body>
</html>
