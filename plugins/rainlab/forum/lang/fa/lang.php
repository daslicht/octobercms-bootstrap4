<?php

return [
    'topics' => [
        'component_name' => 'لیست موضوعات',
        'component_description' => 'نمایش لیستی از تمام موضوعات',
        'per_page' => 'موضوعات در هر صفحه',
        'per_page_validation' => 'فرمت ورودی تعداد موضوعات در هر صفحه صحیح نیست'
    ],
    'topic' => [
        'page_name' => 'صفحه موضوع',
        'page_help' => 'نام صفحه ای که به هنگام کلیک کردن یک موضوع نمایش داده می شود.'
    ],
    'member' => [
        'page_name' => 'صفحه اعضا',
        'page_help' => 'نام صفحه ای که جهت نمایش اطلاعات یک عضو نمایش داده می شود.'
    ],
    'channel' => [
        'component_name' => 'دسته بندی',
        'component_description' => 'نمایش لیست پست هایی که به یک دسته بندی تعلق دارند.',
        'page_name' => 'صفحه دسته بندی',
        'page_help' => 'نام صفحه ای که جهت نمایش یک دسته بندی نمایش داده می شود.'
    ],
    'channels' => [
        'new_channel' => 'دسته بندی جدید',
        'delete_selected_confirm' => 'آیا اطمینان دارید؟',
        'delete' => 'حذف',
        'manage' => 'مدیریت ترتیب دسته بندی ها',
        'return' => 'بازگشت به لیست دسته بندی ها',
        'name' => 'دسته بندی ها',
        'create' => 'ایجاد دسته بندی ها',
        'update' => 'ویرایش دسته بندی ها',
        'preview' => 'پیش نمایش دسته بندی ها',
        'manage' => 'مدیریت دسته بندی ها',
        'creating' => 'در حال ایجاد دسته بندی...',
        'create' => 'ایجاد',
        'createnclose' => 'ایجاد و خروج',
        'cancel' => 'انصراف',
        'or' => 'و یا',
        'returnlist' => 'بازگشت به لیست دسته بندی ها',
        'saving' => 'در حال ذخیره سازی دسته بندی...',
        'save' => 'ذخیره',
        'savenclose' => 'ذخیره و خروج',
        'deleting' => 'درحال حذف دسته بندی...',
        'really' => 'آیا از حذف این دسته بندی اطمینان دارید؟',
        'list_name' => 'لیست دسته بندی',
        'list_desc' => 'نمایش لیستی از همه دسته بندی های فعال.'
    ],
    'slug' => [
        'name' => 'نام پارامتر آدرس',
        'desc' => 'آدرسی که جهت جستجوی دسته بندی مورد استفاده قرار میگیرد.'
    ],
    'frontend' => [
        'notopic' => 'موضوعی در این دسته بندی وجود ندارد.'
    ],

    'plugin' => [
        'name' => 'انجمن',
        'description' => 'انجمن ساده جهت درج در سایت'
    ],
    'data' => [
        'title' => 'عنوان',
        'desc' => 'توضیحات',
        'slug' => 'آدرس',
        'parent' => 'والد',
        'noparent' => '-- بدون والد --',
        'moderated' => 'مدیران',
        'is_mod' => 'فقط مدیران میتوانند در این دسته بندی ارسال داشته باشند',
        'hidden' => 'مخفی',
        'is_hidden' => 'این دسته بندی را در دسته بندی اصلی مخفی بکن.'
    ],
    'settings' => [
        'username' => 'نام کاربری',
        'username_comment' => 'نشانگر این کاربر در انجمن',
        'moderator' => 'مدیر انجمن',
        'moderator_comment' => 'این گزینه را جهت فعال سازی این کاربر به عنوان مدیر انجمن انتخاب نمایید.',
        'banned' => 'عدم دسترسی به انجمن',
        'banned_comment' => 'اگر میخواهید کاربر به انجمن دسترسی پیدا نکنداین گزینه را فعال نمایید.',
        'forum_username' => 'نام کاربری انجمن',
        'channels' => 'دسته بندی های انجمن',
        'channels_desc' => 'مدیریت دسته بندی های موجود در انجمن'
    ],
    'embedch' => [
        'channel_name' => 'نام دسته بندی',
        'channel_self_desc' => 'وصل کردن دسته بندی به هر صفحه ای',
        'channel_title' => 'دسته بندی والد',
        'channel_desc' => 'دسته بندیی را جهت ایجاد دسته بندی جدید مشخص نمایید',
        'embed_title' => 'پارامتر کد یکتا',
        'embed_desc' => 'کد یکتایی جهت تولید دسته بندی',
        'topic_name' => 'پارامتر کد موضوع',
        'topic_desc' => 'پارامتر آدرس جهت جستجوی موضوعات. پارامتر آدرس نیز میتواند در این گزینه استفاده شود.'
    ],
    'embedtopic' => [
        'topic_name' => 'موضوع',
        'topic_self_desc' => 'وصل کردن یک موضوع به هر صفحه ای',
        'target_name' => 'دسته بندی مقصد',
        'target_desc' => 'دسته بندیی را جهت ایجاد موضوع جدید در آن انتخاب نمایید',
        'embed_title' => 'کد یکتا',
        'embed_desc' => 'کد یکتا جهت تولید موضوع یا دسته بندی جدید. پارامتر آدرس نیز میتواند در این گزینه استفاده شود.'
    ],
    'memberpage' => [
        'name' => 'عضو',
        'self_desc' => 'نمایش اطلاعات و فعالیت های عضو انجمن',
        'slug_name' => 'نام پارامتر آدرس',
        'slug_desc' => 'پارامتر آدرسی که جهت جستجوی عضو انجمن مورد استفاده قرار میگیرد.',
        'view_title' => 'حالت نمایش',
        'view_desc' => 'مقدار دهی دستی حالت نمایش ابزار عضو',
        'ch_title' => 'صفحه دسته بندی',
        'ch_desc' => 'نام صفحه ای که یک دسته بندی را نمایش می دهد.',
        'topic_title' => 'صفحه موضوع',
        'topic_desc' => 'نام صفحه ای که یک موضوع را نمایش می دهد.'
    ],
    'topicpage' => [
        'name' => 'موضوع',
        'self_desc' => 'نمایش یک موضوع و ارسال ها',
        'slug_name' => 'نام پارامتر آدرس',
        'slug_desc' => 'نام پارامتر آدرس جهت جستجوی موضوع توسط آدرس آن موضوعو',
        'channel_title' => 'صفحه دسته بندی',
        'channel_desc' => 'نام صفحه ای که یک دسته بندی را نمایش می دهد.'
    ]
];
