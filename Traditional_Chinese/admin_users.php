<?php

// Language definitions used in admin-users.php
$lang_admin_users = array(

'Non numeric message'		=>	'您在一個僅接受數值的列中輸入了非數值。',
'Invalid date time message'	=>	'日期/時間格式不正確。',
'Not verified'				=>	'未驗證',

// Actions: mass delete/ban etc.
'No users selected'			=>	'沒有選取會員。',
'No move admins message'	=>	'安全起見，不允許將多個管理員移動到另一個群組。如果您想移動這些管理員，可以在他們各自的個人資料裡設定。',
'No delete admins message'	=>	'管理員不能被刪除。為了刪除管理員，首先必須將它們移動到不同的會員群組。',
'No ban admins message'		=>	'管理員不能被封鎖。為了封鎖管理員，首先必須將它們移動到不同的會員群組。',
'No ban mods message'		=>	'版主是不能被封鎖。為了封鎖版主，首先必須將它們移動到不同的會員群組。',
'Move users'				=>	'改變會員所屬群組',
'Move users subhead'		=>	'選擇新會員群組',
'New group label'			=>	'新會員群組',
'New group help'			=>	'選擇要將會員移動到所選的的群組。安全起見，不能將多個會員移動到管理員群組。',
'Invalid group message'		=>	'無效的群組 ID.',
'Users move redirect'		=>	'會員所屬群組改變完成。重新導向中 …',
'Delete users'				=>	'刪除會員',
'Confirm delete legend'		=>	'重要：刪除會員之前先閱讀',
'Confirm delete info'		=>	'請確認您要刪除這些會員。',
'Delete posts'				=>	'刪除這些會員所發表的主題及文章。',
'Delete warning'			=>	'警告 ！無法還原已刪除的會員及文章。如果您選擇不刪除這些會員的文章，這些文章以後只能手動刪除。',
'Users delete redirect'		=>	'會員已刪除。重新導向中 …',
'Ban users'					=>	'封鎖會員',
'Message expiry subhead'	=>	'封鎖訊息及有效日期',
'Ban message label'			=>	'封鎖訊息',
'Ban message help'			=>	'當被封鎖的會員訪問論壇時顯示的訊息。',
'Expire date label'			=>	'有效日期',
'Expire date help'			=>	'自動解除封鎖的日期(格式：yyyy-mm-dd)。若要手動刪除請留空。',
'Ban IP label'				=>	'封鎖 IP 位址',
'Ban IP help'				=>	'封鎖被封鎖的使用者之 IP 位址使他們難以註冊新帳號。',
'Invalid date message'		=>	'您輸入了無效的日期。',
'Invalid date reasons'		=>	'格式必須是 YYYY-MM-DD 及日期必須是未來的一天以上。',
'Users banned redirect'		=>	'會員已被封鎖。重新導向中 …',

'User search head'			=>	'會員搜尋',
'User search subhead'		=>	'輸入搜尋準則',
'User search info'			=>	'在資料庫中搜尋會員。您可輸入一個或多個準則進行搜尋。搜尋準則中允許使用萬用字元 *。',
'Username label'			=>	'會員名稱',
'E-mail address label'		=>	'電子信箱位址',
'Title label'				=>	'頭銜',
'Real name label'			=>	'真實姓名',
'Website label'				=>	'個人網站',
'Jabber label'				=>	'Jabber',
'ICQ label'					=>	'ICQ',
'MSN label'					=>	'MSN Messenger',
'AOL label'					=>	'AOL IM',
'Yahoo label'				=>	'Yahoo Messenger',
'Location label'			=>	'所在地',
'Signature label'			=>	'簽名',
'Admin note label'			=>	'管理員注釋',
'Posts more than label'		=>	'發文數大於',
'Posts less than label'		=>	'發文數小於',
'Last post after label'		=>	'最新文章晚於',
'Date help'					=>	'(yyyy-mm-dd hh:mm:ss)',
'Last post before label'	=>	'最新文章早於',
'Last visit after label'	=>	'最後訪問時間晚於',
'Last visit before label'	=>	'最後訪問時間早於',
'Registered after label'	=>	'註冊時間晚於',
'Registered before label'	=>	'註冊時間早於',
'Order by label'			=>	'排序依據',
'Order by username'			=>	'會員名稱',
'Order by e-mail'			=>	'電子信箱',
'Order by posts'			=>	'發文數',
'Order by last post'		=>	'最後發表',
'Order by last visit'		=>	'最後訪問時間',
'Order by registered'		=>	'註冊時間',
'Ascending'					=>	'遞增',
'Descending'				=>	'遞減',
'User group label'			=>	'會員群組',
'All groups'				=>	'所有群組',
'Unverified users'			=>	'未驗證會員',
'Submit search'				=>	'送出搜尋',
'IP search head'			=>	'IP搜尋',
'IP search subhead'			=>	'輸入IP進行搜尋',
'IP address label'			=>	'IP位址',
'IP address help'			=>	'在發文資料庫中搜尋IP位址。',
'Find IP address'			=>	'尋找IP位址',

'Results head'				=>	'搜尋結果',
'Results username head'		=>	'會員名稱',
'Results e-mail head'		=>	'電子信箱',
'Results title head'		=>	'頭銜/身份',
'Results posts head'		=>	'發文',
'Results admin note head'	=>	'管理員注釋',
'Results actions head'		=>	'操作',
'Results IP address head'	=>	'IP位址',
'Results last used head'	=>	'最後使用',
'Results times found head'	=>	'發現次數',
'Results action head'		=>	'操作',
'Results find more link'	=>	'尋找使用這個IP的更多會員',
'Results no posts found'	=>	'目前這個版面尚無這位會員的文章。',
'Select'					=>	'選取',
'Select all'				=>	'全選',
'Unselect all'				=>	'全不選',
'Ban'						=>	'封鎖',
'Delete'					=>	'刪除',
'Change group'				=>	'改變群組',
'Bad IP message'			=>	'所提供的IP位址格式不正確。',
'Results view IP link'		=>	'檢視IP統計資訊',
'Results show posts link'	=>	'顯示文章',
'Results guest'				=>	'訪客',
'Results no IP found'		=>	'資料庫中找不到所提供的IP位址。',
'No match'					=>	'沒有符合的項目'

);
