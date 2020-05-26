<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'portfolio' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j5quQ{Y[H^_z$>l0I3(yg)K9m-OdJ0 (q&Q!HLKoWb>jKDEswveD3$7`n -+~]Pa' );
define( 'SECURE_AUTH_KEY',  ')[wXju9_QG}:h,v<Xy%<@MU4uD}46b$%<a9^DUKTk6qth8ZxG4aOlJ#C0n:.-u-.' );
define( 'LOGGED_IN_KEY',    '&G2q0&iy(3rD!8u<_G&6?!Bq,FZqry#t_C,!,3f 6Qj=~CT>J _B@%Zs]FH$xT]j' );
define( 'NONCE_KEY',        'V..(Z[9Rl=AxsEUc+}u )?z`#~Fnh-fQ8k|F5*~YJ{g~YVm4%`nV_J.U)8NJ7`9|' );
define( 'AUTH_SALT',        '}MjShRo |YzDf5lB6uIka7zTr`N_:FuQ19L^6F7A@+H,14D1Vc1Z*YAX[]8tn m7' );
define( 'SECURE_AUTH_SALT', 'z?7p^<[wKW3u7J_?(}wgIBiLt|weNlft3wPdFHWB7<b7u@&H2iowYBel7=Ym?kKJ' );
define( 'LOGGED_IN_SALT',   '.t0N#TY,x._7LN9n7g7J:md67^0y){qvoB$bs%l`rCa4~|t:$3fA 2vgG}>GmNMm' );
define( 'NONCE_SALT',       'OeRZ`6~.NE0u!ARj]3Px?.oiNnff@w ?HB4[)r8VhYky:3feXfv!DJ+{y)ZV}1o@' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
