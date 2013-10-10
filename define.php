<?php
/** HTML郢晢ｿｽ縺�ｹ晢ｽｬ郢ｧ�ｯ郢晏現ﾎ懃ｸｺ荵晢ｽ臥ｸｺ�ｮDATA郢晢ｿｽ縺�ｹ晢ｽｬ郢ｧ�ｯ郢晏現ﾎ懃ｸｺ�ｮ騾ｶ�ｸ陝�ｽｾ郢昜ｻ｣縺�*/
define('HTML2DATA_DIR', '/data/');

/** data/module 闔会ｽ･闕ｳ荵晢ｿｽ PEAR 郢晢ｽｩ郢ｧ�､郢晄じﾎ帷ｹ晢ｽｪ郢ｧ雋樞煤陷郁ご蝎ｪ邵ｺ�ｫ闖ｴ�ｿ騾包ｽｨ邵ｺ蜷ｶ��*/
set_include_path(realpath(dirname(__FILE__) . '/' . HTML2DATA_DIR . 'module') . PATH_SEPARATOR . get_include_path());

/**
 * DIR_INDEX_FILE 邵ｺ�ｫ郢ｧ�｢郢ｧ�ｯ郢ｧ�ｻ郢ｧ�ｹ邵ｺ蜷ｶ�狗ｸｺ�ｨ邵ｺ髦ｪ竊鍋ｹ晁ｼ斐＜郢ｧ�､郢晢ｽｫ陷ｷ髦ｪ�定抄�ｿ騾包ｽｨ邵ｺ蜷ｶ�狗ｸｺ�ｽ
 *
 * true: 闖ｴ�ｿ騾包ｽｨ邵ｺ蜷ｶ�� false: 闖ｴ�ｿ騾包ｽｨ邵ｺ蜉ｱ竊醍ｸｺ�ｽ null: 髢ｾ�ｪ陷搾ｿｽIIS 邵ｺ�ｯ true邵ｲ竏壺落郢ｧ蠕｡�ｻ�･陞滓じ�ｽ false)
 * 遯ｶ�ｻ IIS 邵ｺ�ｯ邵ｲ�｣OST 隴弱ｅ竊鍋ｹ晁ｼ斐＜郢ｧ�､郢晢ｽｫ陷ｷ髦ｪ�定抄�ｿ騾包ｽｨ邵ｺ蜉ｱ竊醍ｸｺ�ｽ竊定叉讎奇ｿｽ陷ｷ蛹ｻ窶ｲ騾具ｽｺ騾墓ｺ倪�郢ｧ荵晢ｿｽ(http://support.microsoft.com/kb/247536/ja)
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
