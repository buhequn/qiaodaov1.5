<?php
if(!defined('IN_KKFRAME')) exit('Access Denied!');
class plugin_guess_crack{
	var $description = '猜乐个猜破解工具';
	var $modules = array(
		array('id' => 'run', 'type' => 'page', 'title' => '猜乐个猜破解', 'file' => 'add.inc.php'),
		);
	function on_install(){
		DB::query("CREATE TABLE IF NOT EXISTS `guesscrack` ( `v` text NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8");
$v='黄蓉的丈夫:c,千千阙歌原唱:c,李天一是谁的儿子:c,鬼吹灯作者:c,威廉王子的母亲:d,不是因为寂寞才想你原唱:b,徐峥老婆:b,唐悠悠扮演者:b,诸葛亮的老婆:b,非诚勿扰主持人:b,范玮琪老公:d,死了都要爱原唱:b,在希望的田野上原唱是谁:c,钢铁是怎样炼成的作者:a,爱拼才会赢原唱:c,朱茵老公:a,我的歌声里原唱是谁:a,陈小春老婆:a,鸣人的父亲:a,谢娜的老公是谁:c,入木三分的主人公是谁:c,吴君如老公:c,张卫健的老婆:b,蒋雯丽老公是谁:a,过秦论作者:b,蜡笔小新作者:b,堂吉诃德作者:c,春野兆的女儿:c,白天不懂夜的黑原唱:d,文章的老婆:c,汉书 作者:b,名侦探柯南作者:d,一站到底主持人:a,梦醒时分原唱:c,沈佳宜的扮演者:d,简爱的作者:b,水浒传作者:c,胡一菲扮演者:b,火影忍者作者:b,沈眉庄扮演者:d,黄土高坡原唱:a,白百何老公:d,成龙老婆:c,玫瑰之国是哪个国家:b,童话王国是哪个国家:a,风车王国是哪个国家:b,樱花之国是哪个国家:d,咖啡之国是哪个国家:c,钟表之国是哪个国家:a,橡胶之国是哪个国家:c,白象之国是哪个国家:d,泰山:a,华山:a,鄱阳湖:d,武夷山:c,日月潭:c,寒山寺:b,阳澄湖:c,美国首都:d,江西省会:c,青海省会:c,土耳其首都:d,马来西亚首都:c,英国首都:d,法国首都:b,奥地利首都:c,朝鲜首都:b,埃及首都:d,日本首都:a,印度首都:a,新西兰首都:b,内蒙古省会:c,缅甸首都:d,广西省会:c,河南省会:d,马尔代夫首都:a,匈牙利首都:a,黑龙江省会:a,江苏省会:a,新疆省会:d,山西省会:b,意大利首都:d,德国首都:c,泰国首都:d,俄罗斯首都:c,荷兰首都:a,南非首都:a,瑞士首都:a,何弃疗:a,我伙呆:b,人干事:c,人艰不拆:b,说闹觉余:c,累觉不爱:d,火钳刘明:a,十动然拒:b,喜大普奔:c,粉丝:d,不约而同 网络:a,战五渣:b,脑补:a,赤果果:d,逆袭:c,伦家:b,基友:d,表叔 网络词汇:a,杯具:b,毁三观:c,洗具:a,马甲:c,菜鸟:b,1024 百科:a,手滑:b,开挂:d,挽尊:c,有木有:a,bt 网络用语:b,绿茶婊:c,卖萌:b,吐槽:d,太监 网络用语:a,_empty_:a,碉堡了:d,打酱油:a,怪蜀黍:b,亲 网络词:c,厨房 网络用语:d,宅男宅女:b,腐女:c,接盘侠:d,黑出翔:a,高级黑:b,蛋疼:c,男默女泪:d,经拿滚:a,沙发:d,冷无缺:c,来信砍:b,细软跑:a,醒工砖:b,碎一地:d,土豪:a,我和小伙伴们都惊呆了:b,地命海心:c,智捉:d,人希:a,涨姿势:b,么么哒:c,年娇处:d,李菊福:a,五毛党:c,天了噜:d,申精:b,自干五:a,药电睡:b,逼格:d,体亏屁思:a,不造:b,飞蝗芜湖:c,图样图森破:c,酱紫:d,给力:a,元芳体:b,臣妾做不到体:c,油菜花 网络用语:a,骚年:b,加油吧学弟体:d,太水了:d,傲娇:c,挖坟:a,蕾丝边:b,鬼畜:c,砖家:a,吊炸天:b,蛋定:d,金坷垃:d,深井冰:c,口耐:a,致我们终将逝去的青春 导演:a,虎烈拉 电影:d,周杰伦第二部导演电影:b,《中国合伙人》 故事原型:c,失忆的电影:b,这场比赛我可能会跌倒 但我一定会站起来:a,北京遇上西雅图的演员:b,深藏功与名:b,瑞典首都:d,葡萄牙首都:c,巴基斯坦首都:a,印度尼西亚首都:d,老挝首都:c,柬埔寨首都:b,哥伦比亚首都:a,菲律宾首都:d,芬兰首都:d,韩国首都:b,阿根廷首都:b,伊朗首都:c,巴西首都:d,山东省会:c,澳大利亚首都:a,加拿大首都:a,西班牙首都:d,福建省会:a,李小龙墓地:b,鲁迅的故乡:c,武则天陵墓:b,李白墓地:d,秦始皇陵墓:b,杜甫出生地:b,李大钊故乡:c,捷克首都:a,埃塞俄比亚首都:a,冰岛首都:a,比利时首都:c,罗马尼亚首都:a,委内瑞拉首都:b,哈萨克斯坦首都:d,沙特阿拉伯首都:c,巴西主要城市:c,南非主要城市:b,西班牙主要城市:a,印度主要城市:c,韩国主要城市:d,加拿大主要城市:a,埃及主要城市:a,枣糕:d,永源汽车:a,金龙客车:c,陕西汽车:c,躺枪:d,银行家 越狱 电影:b,当你挽救了一条生命就等于挽救了整个世界:b,泰坦尼克号的主题曲:c,李连杰的电影:c,洪金宝成龙的电影:c,武侠的演员:c,李小龙拍哪部电影的时候去世的:a,功夫明星:b,《唐伯虎点秋香》 华安的编号？:c,《东成西就》的导演:d,张国荣的喜剧电影:a,我顶你个肺:a,贾樟柯的电影:a,陈凯歌的代表作:b,《蜀山传》导演:a,李安获得几次奥斯卡最佳导演奖:c,王家卫成名作:b,张艺谋代表作:c,冯小刚的电影:a,古龙电视剧:b,2013港剧:a,金马奖:b,汤姆汉克斯 阿甘正传:b,生化危机李冰冰:d,非常人贩2 汽车:b,奥斯卡最佳男主角奖尼古拉斯凯奇:a,碟中谍:c,地心引力 一共被拯救了几次:c,海军陆战队的军官不满美国政府而偷窃VX神经毒气导弹是哪部电影:c,西尔维斯特史泰龙的成名电影是哪部？:b,社交网络:d,我有九种方法弄死他:a,你好像很美味啊:d,驯龙高手:b,枪，是下等人用的武器:c,了字几笔:b,美的部首:a,恭的部首是什么:c,哀的部首:b,所字的部首:c,冰几画:c,尘的繁体字:d,甚字部首:a,冕什么部首:b,爱字的部首:c,重字几画:d,影的部首:a,聚的部首:b,截的部首:d,幸的部首:c,杀的部首:a,坚的部首:c,畜是什么部首:d,年的部首:c,鬓是什么偏旁:a,着的部首:d,承字什么部首:b,为的部首:d,黛的部首:c,鲁的部首:c,卵的偏旁:b,串部首:a,爽 的部首是什么:a,水至清则无鱼出处:a,上梁不正下梁歪 出处:b,因材施教的出处:d,醉翁之意不在酒的出处:c,树欲静而风不止的出处:b,天下兴亡匹夫有责的出处:d,对牛弹琴出处:a,不到黄河心不死出处:a,守株待兔的出处:a,庖丁解牛出处:a,三顾茅庐的出处:c,癞蛤蟆想吃天鹅肉出处:a,一言既出驷马难追的出处:d,近朱者赤近墨者黑 出处:c,以小人之心度君子之腹 出处:a,刻舟求剑出处:d,海纳百川出处:a,天时地利人和出处:c,千里送鹅毛的出处:b,东施效颦出处:b,为虎作伥出处:d,道不同不相为谋出处:b,重赏之下必有勇夫出处:d,皮之不存毛将焉附出处:a,竭泽而渔的出处:a,亡羊补牢 出处:a,人不可貌相 出处:d,徐娘半老出处:b,四面楚歌出处:a,盘问的同义词什么:c,强健的反义词:d,启迪的同义词:d,热爱的反义词:a,舍生取义的反义词:a,古往今来的近义词:c,管中窥豹的近义词:a,咫尺的反义词:b,了望的近义词是什么:a,娓娓而谈的近义词:a,微茫的反义词:b,恬静 反义词:a,唇齿相依的近义词:a,酣畅淋漓的近义词:a,络绎不绝的近义词:c,羡慕 近义词:c,命途多舛的近义词:b,两袖清风的近义词:a,梦寐以求的近义词是什么:a,凛冽的反义词:a,耀武扬威的近义词:b,姹紫嫣红的同义词:b,鞭辟入里同义词:b,集腋成裘的近义词:a,白驹过隙近义词:b,问渠那得清如许的下一句:c,沉舟侧畔千帆过的下一句:d,人生自古谁无死的下一句:b,春蚕到死丝方尽的下一句:c,云横秦岭家何在的下一句:a,采菊东篱下的下一句:a,关关雎鸠，在河之洲的下一句:c,安得广厦千万间的下一句:b,越南首都:d,湖南省会:d,希腊首都:c,东方鲁尔:a,泰国主要城市:b,囧:b,槑:a,如花:b,大长今国语版主题曲:a,汤姆·汉克斯 阿甘正传:c,狄仁杰之神都龙王 茶叶:c,空中监狱 男主角:b,遭扣飞机军火商为电影:a,最真实反映战争和人性的超级巨作:c,王小贱:c,朱门酒肉臭路有冻死骨 出处:b,上善若水的出处:c,潇洒反义词:a,坚持不懈的近义词是什么:d,名堂的近义词是什么:c,一丘之貉近义词:d,会当凌绝顶的下一句:d,无边落木萧萧下的下一句:a,魂来枫林青的下一句:d,吴楚东南坼的下一句:b,感时花溅泪的下一句:b,劝君更尽一杯酒的下一句:c,但去莫复问的下一句:a,星垂平野阔的下一句:a,空山新雨后的下一句:b,秦时明月汉时关的下一句:b,醉里挑灯看剑的下一句:c,乱花渐欲迷人眼的下一句:a,海内存知己的下一句:b,忽如一夜春风来的下一句:b,朝辞白帝彩云间的下一句:a,孤帆远影碧空尽的下一句:c,举头望明月的下一句:d,陈王昔时宴平乐的下一句:b,浮云游子意的下一句:b,长风破浪会有时的下一句:d,且放白鹿青崖间的下一句:a,lv:b,信口开河的近义词:c,望眼欲穿的近义词:b,西尔维斯特·史泰龙的成名电影是哪部？:b,神魂颠倒同义词:b,红豆生南国的下一句:c,《绝命圣诞夜》男主角的职业:d,《真爱至上》是由多少个故事串联在一起的:c,电影《圣诞快乐》以什么战争为题材:a,南瓜王子杰克在《圣诞夜惊魂》中的知心女伴:a,《全面搜寻圣诞狗狗》的狗叫什么名字:a,《冰河世纪之猛犸象的圣诞》里面猛犸象家族世代流传的宝物:c,《圣诞坏公公》中两名骗徒假扮角色:b,《圣诞颂歌》中埃比尼泽·斯克鲁奇一共被几个幽灵拜访过:b,《平安夜》电影题材:b,《四喜临门》电影别名:a,铃儿响叮当作者:c,平安夜:c,圣诞老人村:a,芬兰国花:d,达芬奇:b,黄山在哪个省份:d,马拉松一词指什么:b,圣诞树象征什么:d,丹麦的圣诞前餐是什么:a,圣诞老人出自哪个通话故事里呢:d,世界上最重的动物:a,灰太狼被平底锅砸的次数:d,复旦投毒化学品名称:c,雨神:d,避H7N9奇葩菜:b,李克强看电影:c,第50届金马奖最佳女主角:a,2014年世界杯:d,小学生推荐阅读武侠书目:a,王力宏女友:b,食品安全:b,《机器猫》静香洗澡次数:b,央视主播选拔标准:c,《司马光砸缸》是小学几年级课文:a,柳岩三围:a,90后离婚理由:a,帮你上头条:c,中国大妈被抓:b,李天一父亲:b,干菜翻译:a,第一夫人着装产地:d,北京英语高考改革:d,卡梅隆最喜欢的中国食品:c,北京打工男子:a,中国员工休假天数:b,中国大妈被套:d,苍井空择偶标准:b,超生门:c,斯诺登:a,北京摇号新规:a,王岳伦女儿:b,《谁来陪我过圣诞节》中神秘圣诞礼物:b,《完美圣诞节》的别名:b,沙特王子包场:b,圣诞节的由来:a,圣诞花:d,雪夜狂想曲:c,愤怒的小鸟圣诞版:a,圣诞树最早出现的国家是哪里:c,圣诞色:b,熊大:b,水果之王:d,第一个圣诞节是什么时候举行的:a,和服:b,喜洋洋几岁:c,圣诞星 翻译:b,圣诞礼物放哪里:a,真爱至上是由多少个故事串联在一起的:d,绝命圣诞夜男主角的职业:d,逃离圣诞:c,圣诞故事:b,美国画家托马斯金凯圣诞作品:a,电影圣诞快乐以什么战争为题材:a,圣诞怪杰男主角:c,战场上的快乐圣诞的导演是谁:b,我是山姆:b,超凡蜘蛛侠:b,星球大战 :b,勇敢的心:b,建国大业的演员表:d,周星驰 功夫:a,曾志伟 双城故事:b,泰囧:d,奇瑞:b,萨博:c,大众:a,比亚迪:c,标致:b,斯柯达:a,起亚:b,雪铁龙:b,中华:b,雪佛兰:c,马自达:d,名爵:b,沃尔沃:a,西雅特:d,荣威:c,兰博基尼:a,福特:b,现代:c,丰田:d,长城汽车:a,凯迪拉克:b,林肯:b,菲亚特:c,斯巴鲁:a,言必信 行必果出处:a,娃娃鱼:a,圣诞老人的超级朋友:d,谁来陪我过圣诞节中神秘圣诞礼物:b,居家男人:d,圣诞传说的片尾曲是什么:a,小鬼当家1中，全家人打算飞往哪里过圣诞节:d,南瓜王子杰克在圣诞夜惊魂中的知心女伴:a,西雅图夜未眠的剧情是从哪个节日开始:a,哪部电影把圣诞老人纳入超级英雄的团队:b,圣诞结:a,Santa Claus:d,杰克和露丝:c,全面搜寻圣诞狗狗的狗叫什么名字:a,亨利·塞利克的星座:b,冰河世纪之猛犸象的圣诞里面猛犸象家族世代流传的宝物:c,圣诞颂歌:c,海啸奇迹:c,圣诞坏公公中两名骗徒假扮角色:b,真爱至上中扮演英国首相的演员是谁:a,圣诞夜奇迹上映年份:d,东京教父主角Gin前职业:d,极地特快男主演:a,杀手没有假期:c,圣诞颂歌中埃比尼泽·斯克鲁奇一共被几个幽灵拜访过:b,:a,光头佬:a,四喜临门电影别名:a,南瓜灯:c,西伯利亚雪橇犬:d,圣诞老人坐骑:d,吐绶鸡 :a,平安夜是几月几日:c,圣诞老人的红色雪橇是用什么树树枝枝点缀的呢:c,王熙凤:c,自由女神像谁送的:a,圣诞节是哪个宗教最大的节日:a,圣诞老人多大:a,Aurora Borealis:a,圣诞老人出自哪个童话故事里呢:d,奥地利国花:a,圣诞花环:c,火鸡英文:b,12月25日星座:a,喜羊羊几岁:c,和服起源:d,天天的爸爸:d,亚冠决赛:b,目前最严重的气象问题是:a,原国务院国资委主任:b,《悲伤逆流成河》作者:c,香港媒体称之为巨鸭的是:c,催泪歌神:b,开发商扎堆抄底拿地:c,7.0级地震:b,中国第五艘搭载太空人的飞船:a,若曦和四爷:b,中国军队出国十大事件:b,女特工被抓挖矿:c,申遗成功带热算盘收藏:d,中国月球车:d,巴格达地区唯一华人女记者:d,当过加州州长的男演员:c,圣诞精灵:a,亚洲象保护区:c';
		DB::query("INSERT INTO `guesscrack`(`v`) VALUES ('{$v}')");
		saveSetting('guesscrack-run', 1);
	}
	function on_uninstall(){
		DB::query("DROP TABLE guesscrack");
		saveSetting('guesscrack-run', 0);
	}
	function page_footer_js() {
		return '<script type="text/javascript" src="plugins/guess_crack/guesscrack.js?version=1.14.6.2"></script>'."\r\n";
	}
}