<?php
/*
Template Name: 応募フォーム
*/
?>
<?php get_header(); ?>
<article id="entry" class="underlayer">
  <section id="sec_01" class="sec">
    <div class="cover">

    </div>
  </section>
  <section id="sec_02" class="sec">
    <h2 class="ttl_en-ja align_center">
        <span class="en sr_bottom">ENTRY</span>
        <span class="ja sr_bottom">中途エントリー</span>
      </h2>
      <p class="align_center">こちらは中途採用の応募フォームになります。<br>
        以下の項目を入力後、エントリーボタンを押してください。</p>
      <div class="cont">
        <dl class="form-item">
          <dt class="label">お名前<span class="required">必須</span></dt>
          <dd><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required s40" id="yourname" aria-required="true" aria-invalid="false" /></span><span class="note">必須入力項目です。</span></dd>
          </dl>

          <dl class="form-item">
          <dt class="label">ふりがな<span class="required">必須</span></dt>
          <dd><span class="wpcf7-form-control-wrap your-name-kana"><input type="text" name="your-name-kana" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required s40" id="yourname_kana" aria-required="true" aria-invalid="false" /></span><span class="note">必須入力項目です。</span></dd>
          </dl>

          <dl class="form-item">
          <dt class="label">生年月日<span class="required">必須</span></dt>
          <dd>
          <span class="wpcf7-form-control-wrap birth-y">
        <input type="text" name="birth-y" value="" size="8" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required s8" id="birth_y" aria-required="true" aria-invalid="false" />
        </span>年
        <span class="wpcf7-form-control-wrap birth-m">
          <select type="text" name="birth-m" value="" size="1" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required s1" id="birth_y" aria-required="true" aria-invalid="false">
          <option value=""></option><option value="1月">1</option><option value="2月">2</option><option value="3月">3</option><option value="4月">4</option>
          <option value="5月">5</option><option value="6月">6</option><option value="7月">7</option><option value="8月">8</option><option value="9月">9</option>
          <option value="10月">10</option><option value="11月">11</option><option value="12月">12</option>
          </select>
        </span>月
      <span class="wpcf7-form-control-wrap birth-d">
        <select type="text" name="birth-d" value="" size="1" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required s1" id="birth_y" aria-required="true" aria-invalid="false">
        <option value=""></option><option value="1日">1</option><option value="2日">2</option><option value="3日">3</option><option value="4日">4</option><option value="5日">5</option>
        <option value="6日">6</option><option value="7日">7</option><option value="8日">8</option><option value="9日">9</option><option value="10日">10</option>
        <option value="11日">11</option><option value="12日">12</option><option value="13日">13</option><option value="14日">14</option><option value="15日">15</option>
        <option value="16日">16</option><option value="17日">17</option><option value="18日">18</option><option value="19日">19</option><option value="20日">20</option>
          <option value="21日">21</option><option value="22日">22</option><option value="23日">23</option><option value="24日">24</option><option value="25日">25</option>
          <option value="26日">26</option><option value="27日">27</option><option value="28日">28</option><option value="29日">29</option><option value="30日">30</option><option value="31日">31</option>
      </select>
    </span>日<br />
          <span class="note">必須入力項目です。</span></dd>
          </dl>

          <dl class="form-item">
          <dt class="label">郵便番号<span class="required">必須</span></dt>
          <dd>
          <span class="wpcf7-form-control-wrap zipcode"><input type="text" name="zipcode" value="" size="3" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required z3" id="zip01" aria-required="true" aria-invalid="false" /></span>-<span class="wpcf7-form-control-wrap zipcode"><input type="text" name="zipcode" value="" size="4" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required z4" id="zip02" aria-required="true" aria-invalid="false" /></span><br /><span class="note">必須入力項目です。</span></dd>
          </dl>

          <dl class="form-item">
          <dt class="label">ご住所<span class="required">必須</span></dt>
          <dd><span class="wpcf7-form-control-wrap address"><input type="text" name="address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required w100 s40" id="address" aria-required="true" aria-invalid="false" /></span><span class="note">必須入力項目です。</span></dd>
          </dl>

          <dl class="form-item">
          <dt class="label">電話番号<span class="required">必須</span></dt>
          <dd><span class="wpcf7-form-control-wrap tel-no"><input type="tel" name="tel-no" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel s40" id="telno" aria-required="true" aria-invalid="false" /></span><span class="note">必須入力項目です。</span></dd>
          </dl>

          <dl class="form-item">
          <dt class="label">PCメールアドレス<span class="required">必須</span></dt>
          <dd><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email s40" id="email" aria-required="true" aria-invalid="false" /></span><span class="note">必須入力項目です。</span></dd>
          </dl>

          <dl class="form-item">
          <dt class="label">最終学歴<span class="required">必須</span></dt>
          <dd>
          <span class="wpcf7-form-control-wrap education">
        <select name="education" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required s7" id="education" aria-required="true" aria-invalid="false">
          <option value=""></option><option value="大学院">大学院</option><option value="大学">大学</option><option value="短大">短大</option>
          <option value="高専">高専</option><option value="専門／専修">専門／専修</option><option value="高校">高校</option><option value="中学">中学</option>
          <option value="その他">その他</option>
        </select></span><br />
          <span class="wpcf7-form-control-wrap ed_year">
        <input type="text" name="ed_year" value="" size="8" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required s8" id="ed_year" aria-required="true" aria-invalid="false" />
        </span>年
        <span class="wpcf7-form-control-wrap ed_month">
          <select type="text" name="ed_month" value="" size="1" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required s1" id="ed_month" aria-required="true" aria-invalid="false">
            <option value=""></option><option value="1月">1</option><option value="2月">2</option><option value="3月">3</option><option value="4月">4</option><option value="5月">5</option>
            <option value="6月">6</option><option value="7月">7</option><option value="8月">8</option><option value="9月">9</option><option value="10月">10</option>
            <option value="11月">11</option><option value="12月">12</option>
          </select>
        </span>月
        <span class="wpcf7-form-control-wrap ed_status">
          <select name="ed_status" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required s7" id="ed_status" aria-required="true" aria-invalid="false">
            <option value=""></option><option value="卒業見込み">卒業見込み</option><option value="卒業">卒業</option><option value="中退">中退</option>
          </select>
        </span><br />
          <span class="note">必須入力項目です。</span></dd>
          </dl>

          <dl class="form-item">
          <dt class="label">普通運転免許<span class="required">必須</span></dt>
          <dd>
          <span class="wpcf7-form-control-wrap licence"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><label><input type="radio" name="licence" value="持っている" /><span class="wpcf7-list-item-label">持っている</span></label></span><span class="wpcf7-list-item last"><label><input type="radio" name="licence" value="持っていない" /><span class="wpcf7-list-item-label">持っていない</span></label></span></span></span><br />
          <span class="note">必須入力項目です。</span></dd>
          </dl>

          <dl class="form-item">
          <dt class="label">その他資格<span class="optional">任意</span></dt>
          <dd><span class="wpcf7-form-control-wrap qualifications"><textarea name="qualifications" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea c40" aria-invalid="false"></textarea></span></dd>
          </dl>

          <dl class="form-item">
          <dt class="label">希望職種<span class="required">必須</span></dt>
          <dd>
          <span class="wpcf7-form-control-wrap hope"><select name="hope" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required s7" id="hope" aria-required="true" aria-invalid="false"><option value=""></option><option value="営業">営業</option><option value="営業事務">営業事務</option><option value="配布スタッフ">配布スタッフ</option><option value="編集スタッフ">編集スタッフ</option><option value="商材管理">商材管理</option></select></span><br />
          <span class="note">必須入力項目です。</span></dd>
          </dl>

          <dl class="form-item"><dt class="label">希望勤務地<span class="required">必須</span></dt>
          <dd>
          <span class="wpcf7-form-control-wrap palce"><select name="palce" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required s7" id="palce" aria-required="true" aria-invalid="false"><option value=""></option><option value="目黒">目黒</option><option value="横浜">横浜</option><option value="町田">町田</option><option value="池袋">池袋</option><option value="北千住">北千住</option><option value="埼玉">埼玉</option><option value="立川">立川</option><option value="埼玉東">埼玉東</option><option value="浜松">浜松</option><option value="仙台">仙台</option><option value="福岡">福岡</option><option value="その他">その他</option></select></span><br />
          <span class="note">必須入力項目です。</span></dd>
          </dl>

          <dl class="form-item">
          <dt class="label">希望転職時期<span class="required">必須</span></dt>
          <dd><span class="wpcf7-form-control-wrap timing"><input type="text" name="timing" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required s40" id="timing" aria-required="true" aria-invalid="false" /></span><br />
          <span class="note">必須入力項目です。</span></dd>
          </dl>

          <dl class="form-item">
          <dt class="label">その他<span class="optional">任意</span></dt>
          <dd>
          <span class="wpcf7-form-control-wrap hope_opinion"><textarea name="hope_opinion" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea c40" aria-invalid="false" placeholder="その他、希望事項がありましたらご記入ください"></textarea></span><br />
          <span class="note">必須入力項目です。</span></dd>
          </dl>

          <dl class="form-item">
          <dt class="label">職務経歴(1)<span class="optional">任意</span></dt>
          <dd>
            <ul>
              <li><p>社名</p>
                <div>
                <span class="wpcf7-form-control-wrap hy1_company_name"><input type="text" name="hy1_company_name" value="" size="40" class="wpcf7-form-control wpcf7-text ss40" aria-invalid="false" /></span>
                </div>
              </li>
              <li><p>在籍期間</p>
                <div>
                <span class="wpcf7-form-control-wrap hy1_from_y"><input type="text" name="hy1_from_y" value="" size="8" class="wpcf7-form-control wpcf7-text ss8" id="hy1_from_y" aria-invalid="false" /></span>年<span class="wpcf7-form-control-wrap hy1_from_m"><input type="text" name="hy1_from_m" value="" size="4" class="wpcf7-form-control wpcf7-text s4" id="hy1_from_m" aria-invalid="false" /></span>月 から<span class="wpcf7-form-control-wrap hy1_to_y"><input type="text" name="hy1_to_y" value="" size="8" class="wpcf7-form-control wpcf7-text ss8" id="hy1_to_y" aria-invalid="false" /></span>年<span class="wpcf7-form-control-wrap hy1_to_m"><input type="text" name="hy1_to_m" value="" size="4" class="wpcf7-form-control wpcf7-text s4" id="hy1_to_m" aria-invalid="false" /></span>月
                </div>
              </li>
              <li><p>雇用形態</p>
                <div>
                <span class="wpcf7-form-control-wrap hy1_type"><select name="hy1_type" class="wpcf7-form-control wpcf7-select s7" aria-invalid="false"><option value=""></option><option value="正社員">正社員</option><option value="契約社員">契約社員</option><option value="パート">パート</option><option value="その他">その他</option></select></span>
                </div>
              </li>
              <li><p>役職</p>
                <div>
                <span class="wpcf7-form-control-wrap hy1_position"><input type="text" name="hy1_position" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span>
                </div>
              </li>
              <li><p>主な職務内容</p>
                <div>
                <span class="wpcf7-form-control-wrap hy1_detail"><textarea name="hy1_detail" cols="40" rows="1" class="wpcf7-form-control wpcf7-textarea cc40" aria-invalid="false"></textarea></span>
                </div>
              </li>
              <li><p>年収</p>
                <div>
                <span class="wpcf7-form-control-wrap hy1_income"><input type="text" name="hy1_income" value="" size="5" class="wpcf7-form-control wpcf7-text s5" aria-invalid="false" /></span>万円
                </div>
              </li>
            </ul>
          </dd>
          </dl>

          <dl class="form-item">
          <dt class="label">職務経歴(2)<span class="optional">任意</span></dt>
          <dd>
            <ul>
              <li><p>社名</p>
                <div>
                <span class="wpcf7-form-control-wrap hy2_company_name"><input type="text" name="hy2_company_name" value="" size="40" class="wpcf7-form-control wpcf7-text ss40" aria-invalid="false" /></span>
                </div>
              </li>
              <li><p>在籍期間</p>
                <div>
                <span class="wpcf7-form-control-wrap hy2_from_y"><input type="text" name="hy2_from_y" value="" size="8" class="wpcf7-form-control wpcf7-text ss8" id="hy2_from_y" aria-invalid="false" /></span>年<span class="wpcf7-form-control-wrap hy2_from_m"><input type="text" name="hy2_from_m" value="" size="4" class="wpcf7-form-control wpcf7-text s4" id="hy2_from_m" aria-invalid="false" /></span>月 から<span class="wpcf7-form-control-wrap hy2_to_y"><input type="text" name="hy2_to_y" value="" size="8" class="wpcf7-form-control wpcf7-text ss8" id="hy2_to_y" aria-invalid="false" /></span>年<span class="wpcf7-form-control-wrap hy2_to_m"><input type="text" name="hy2_to_m" value="" size="4" class="wpcf7-form-control wpcf7-text s4" id="hy2_to_m" aria-invalid="false" /></span>月
                </div>
              </li>
              <li><p>雇用形態</p>
                <div>
                <span class="wpcf7-form-control-wrap hy2_type"><select name="hy2_type" class="wpcf7-form-control wpcf7-select s7" aria-invalid="false"><option value=""></option><option value="正社員">正社員</option><option value="契約社員">契約社員</option><option value="パート">パート</option><option value="その他">その他</option></select></span>
                </div>
              </li>
              <li><p>役職</p>
                <div>
                <span class="wpcf7-form-control-wrap hy2_position"><input type="text" name="hy2_position" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span>
                </div>
              </li>
              <li><p>主な職務内容</p>
                <div>
                <span class="wpcf7-form-control-wrap hy2_detail"><textarea name="hy2_detail" cols="40" rows="1" class="wpcf7-form-control wpcf7-textarea cc40" aria-invalid="false"></textarea></span>
                </div>
              </li>
              <li><p>年収</p>
                <div>
                <span class="wpcf7-form-control-wrap hy2_income"><input type="text" name="hy2_income" value="" size="5" class="wpcf7-form-control wpcf7-text s5" aria-invalid="false" /></span>万円
                </div>
              </li>
            </ul>
          </dd>
          </dl>
      </div>

      <div class="privacyBlock">
        <div>
          以下の「個人情報の取扱いについて」をよくお読みになり、同意の上、お問合せ下さい。<br />
          ■(株)ぱど（以下「当社」という）における個人情報の取扱いについて<br />◎ご記入いただいた個人情報はお問合せへの対応を目的とした範囲内に限定して利用いたします。<br />
          ◎お問合せへの対応に際し必要に応じて、ご記入いただいた個人情報をＦＡＸ・メールにて、当社と契約済みのぱどグループ各社へ提供する場合があります。ぱどグループの詳細はこちらで確認出来ます<br />
          →　<a href="https://www.pado.co.jp/company/office/" target="_blank">https://www.pado.co.jp/company/office/</a><br />
          ◎個人情報をお預け頂くことはご本人様の任意ですが、必要事項にご記入漏れがあると、お問合せへの回答をいたしかねる場合がございます。<br />
          ◎当社が保有するお問合せ者ご本人様の個人情報の利用目的の通知、開示、内容の訂正、追加又は削除、利用の停止、消去及び第三者への提供の停止のお申し出には適切に対応いたします。<br />
          ◎個人情報保護管理者代理／株式会社ぱど　カスタマセンター長<br />
          ◎個人情報に関する苦情・問合せ窓口／株式会社ぱど　カスタマセンター<br />
          0120-090-810（受付時間／平日10：00～17：00・土日祝を除く）<br />
          <a href="https://www.pado.co.jp/privacy" target="_blank">※株式会社ぱど・個人情報保護方針</a><br />
          ※本フォームから送信される情報はSSL：Secure Socket Layer によって保護されています
        </div>
      </div>

      <p class="btn_form">
        <a href="">
            エントリーする
          </a>
      </p>

  </section>
  </article>
  <?php get_template_part( 'template-parts/content-entry' ); ?>
<?php get_footer(); ?>
