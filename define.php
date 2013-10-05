<?php
/** HTML繝�ぅ繝ｬ繧ｯ繝医Μ縺九ｉ縺ｮDATA繝�ぅ繝ｬ繧ｯ繝医Μ縺ｮ逶ｸ蟇ｾ繝代せ */
define('HTML2DATA_DIR', '/data/');

/** 9data/module 莉･荳九� PEAR 繝ｩ繧､繝悶Λ繝ｪ繧貞━蜈育噪縺ｫ菴ｿ逕ｨ縺吶ｋ */
set_include_path(realpath(dirname(__FILE__) . '/' . HTML2DATA_DIR . 'module') . PATH_SEPARATOR . get_include_path());

/**
 * DIR_INDEX_FILE 縺ｫ繧｢繧ｯ繧ｻ繧ｹ縺吶ｋ縺ｨ縺阪↓繝輔ぃ繧､繝ｫ蜷阪ｒ菴ｿ逕ｨ縺吶ｋ縺�
 *
 * true: 菴ｿ逕ｨ縺吶ｋ, false: 菴ｿ逕ｨ縺励↑縺� null: 閾ｪ蜍�IIS 縺ｯ true縲√◎繧御ｻ･螟悶� false)
 * 窶ｻ IIS 縺ｯ縲￣OST 譎ゅ↓繝輔ぃ繧､繝ｫ蜷阪ｒ菴ｿ逕ｨ縺励↑縺�→荳榊�蜷医′逋ｺ逕溘☆繧九�(http://support.microsoft.com/kb/247536/ja)
 */
define('USE_FILENAME_DIR_INDEX', null);

/*
 * Local variables:
 * coding: utf-8
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */
