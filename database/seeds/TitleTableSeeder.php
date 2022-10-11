<?php

use Illuminate\Database\Seeder;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = [
            'ゆるキャン△', '五等分の花嫁', '物語シリーズ', '青春ブタ野郎シリーズ', 
            '咲-Saki-', 'ゆゆ式', '俺の妹がこんなにこんなに可愛いわけがない', 'リコリス・リコイル',
            'ラブライブ！シリーズ', 'とあるシリーズ', '氷菓', 'ヨスガノソラ', 
            'やはり俺の青春ラブコメはまちがっている。', '冴えない彼女の育てかた', '涼宮ハルヒシリーズ', '僕らはみんな河合荘'
            ];
            
        $author = [
            'あfろ', '春場ねぎ', '西尾維新', '鴨志田一',
            '小林立', '三上小又', '伏見つかさ', 'Spider Lilly',
            '公野櫻子', '鎌池和馬', '米澤穂信', 'Sphere',
            '渡航', '丸戸史明', '谷川流', '宮原るり'
            ];
            
        $publisher = [
            '芳文社', '講談社', '講談社', 'KADOKAWA', 
            'スクウェア・エニックス', '芳文社', 'KADOKAWA', 'KADOKAWA',
            'KADOKAWA', 'KADOKAWA', 'KADOKAWA', 'KADOKAWA',
            '小学館', 'KADOKAWA', 'KADOKAWA', '少年画報社'
            ];
            
        $body = [
            '山梨県や静岡県を中心に女子高生がゆるやかに繰り広げる日常系アウトドア作品。',
            '家庭教師となった1人の秀才男子高校生と勉強が苦手な美人五つ子女子高生のラブコメ作品。',
            '偶然吸血鬼を助けたことで始まった「怪異」にまつわる不思議なラブコメ物語。',
            '「思春期症候群」と呼ばれる都市伝説的現象を解決することで成長していく高校生たちの青春恋愛作品。',
            '超常的なスキルを駆使しながら競い合う女子高生たちの麻雀物語。',
            '仲良し女子高生3人組がただただゆる〜く生活するだけの日常系ギャグ作品。',
            'ツン強めな実はオタクのツンデレ妹に振り回される兄の奮闘を描くラブコメ作品。',
            '日本の治安を守る治安維持組織「DA」に属する暗殺少女部隊「リコリス」。そのリコリスに不審を抱くテロリストとのガンアクション作品。',
            '廃校を阻止するべく始められたスクールアイドル活動を示す成長物語。',
            '超能力が科学によって解明された世界で繰り広げられるバトルアクション作品。',
            '古典部の文集『氷菓』に秘められた真実に挑む学園ミステリー作品。',
            '両親を亡くした双子の兄妹が山里に移り住んだことで始まった恋愛物語。',
            'ひねくれ男子高校生が「奉仕部」に入部したことで青春に興味を持ち始めるラブコメ作品。',
            '才能を持った仲間とともに同人ゲームの主人公を最高のヒロインにするべく奮起する青春ラブコメ。',
            'エキセントリックな女子高生と普通の男子高校生が繰り広げるSF学園物語。',
            '親の転勤により「河合荘」という下宿先に住むことになった主人公。変人ばかりの住民の中にいた憧れの先輩との一風変わった青春物語。'
            ];
            
        $fav_chara = [
            '志摩リン', '中野三玖', '八九寺真宵', '牧之原翔子', 
            '東横桃子（ステルスモモ）', '日向縁', '黒猫', 'クルミ',
            '南ことり', '白井黒子', '千反田える', '倉永梢', 
            '比企谷小町', '加藤恵', '長門有希', '河合律'
            ];
            
        $recommended_point = [
            '本格的なキャンプ知識が身に付くかも。聖地巡礼やコラボイベントに力が入っていて3次元でも楽しめます！',
            '五つ子の性格が様々で、きっと推しができるはず！',
            '独特の世界観が癖になる！時間軸を調べてから見ること推奨。',
            '現代社会の人付き合いを考えさせられる感動作品。咲太の純粋さに惹かれます。',
            '麻雀のルールが分かった方が楽しめるかも。分からなくても可愛い女子が真剣に取り組む姿に惹かれます。',
            '疲れたときに見るとより一層癒されます。管理人が1番好きな作品です！',
            'オタクであることを肯定された気がして嬉しくなります。アニメ2期、急にラブコメ展開のギアが入ります！悶絶注意!',
            '作画の美しさに目を奪われます。登場人物全員がいいやつ！',
            'タイトルは誰もが聞いたことがあるようなアイドル作品の名作。コラボタクシーやバスなど街ぐるみで作品が愛されてます。',
            'ラノベの長編名作。科学とファンタジーの融合が厨二心をくすぐられます。',
            'ミステリー部門で賞を取ったこともあり、世界観の作り込まれ方はお墨付き！',
            'エロゲ原作ということもあり、ちょっと過激です。一緒に見る人は慎重に選びましょう。',
            'みんな拗れてます。そのひねくれ方も共感でき、魅力に変わります。',
            '最初からラブコメ展開全開です。意外と珍しいかも？',
            '京アニといえばハルヒという人も多いはず！エンドレスエイトに耐えれた人はすごい！',
            '隠れた名作の1つ？個性が強いキャラが好きな人はハマるはず！'
            ];
            
            
        $params = array();
        for ($i=0; $i<16; $i++) {
        $params[] = [
        'id' => $i + 1,
        'name' => $title[$i],
        'author' => $author[$i],
        'publisher' => $publisher[$i],
        'body' => $body[$i],
        'fav_chara' => $fav_chara[$i],
        'recommended_point' => $recommended_point[$i],
         ];
         
        }
        
        
        foreach($params as $param){
            DB::table('titles')->insert($param); 
        }
    }
}
