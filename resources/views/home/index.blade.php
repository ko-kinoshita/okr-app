・objective 
ワクワクするような目標
key_result（定量化）
これを達成できたらobjectiveが達成されたと言って良いというものを3つ程

・例）
objective）日本一のラーメン屋を作りたい
key_result）・売り上げ2000万・従業員の応募が月50人・口コミサイトで4.0以上の評価

・自信度）
10「絶対達成できる」
5「ベスト尽くせばいけるかも」
1「無理でしょ。。。」

・目標達成に向けて宣言しあう
今週の優先事項、今後4週間の予定、okr自信度状況、健康健全指標（チームの雰囲気、働きすぎてギスギスしたら本末店頭、お客さんに無理やり売らない等）

・ウィンセッション
各チーム成果発表、お互いを称え合う、喜びを共有し次週の糧に、酒を飲みながら言い合う雰囲気で

@extends('home.app')

@section('content')
<div class="okr">
    <section class="section_wrap">
        <h1 class="title">会社</h1>
        <div class="company_objective">
            <div class="company objective">
                <h2 class="content">objective</h2>
                <p class="content">(目標)</p>
            </div>

            <div class="key_result_gather">
                <div class="company key_result">
                    <h2 class="content">Key Result</h2>
                    <p class="content">(主な結果)</p>
                </div>
                <div class="company key_result">
                    <h2 class="content">Key Resul</h2>
                    <p class="content">(主な結果)</p>
                </div>
                <div class="company key_result">
                    <h2 class="content">Key Resul</h2>
                    <p class="content">(主な結果)</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section_wrap">
        <h1 class="title">部門</h1>
        <div class="company_objective">
            <div class="group objective">
                <h2 class="group content">objective</h2>
                <p class="group content">(目標)</p>
            </div>

            <div class="key_result_gather">
                <div class="group key_result">
                    <h2 class="content">Key Result</h2>
                    <p class="content">(主な結果)</p>
                </div>
                <div class="group key_result">
                    <h2 class="content">Key Resul</h2>
                    <p class="content">(主な結果)</p>
                </div>
            </div>
        </div>

        <div class="company_objective">
            <div class="group objective">
                <h2 class="group content">objective</h2>
                <p class="group content">(目標)</p>
            </div>

            <div class="key_result_gather">
                <div class="group key_result">
                    <h2 class="content">Key Result</h2>
                    <p class="content">(主な結果)</p>
                </div>

            </div>
        </div>
        <div class="company_objective">
            <div class="group objective">
                <h2 class="group content">objective</h2>
                <p class="group content">(目標)</p>
            </div>

            <div class="key_result_gather">
                <div class="group key_result">
                    <h2 class="content">Key Result</h2>
                    <p class="content">(主な結果)</p>
                </div>
                <div class="group key_result">
                    <h2 class="content">Key Resul</h2>
                    <p class="content">(主な結果)</p>
                </div>
                <div class="group key_result">
                    <h2 class="content">Key Resul</h2>
                    <p class="content">(主な結果)</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section_wrap">
        <h1 class="title">個人</h1>
        <div class="individual_objective">
            <div class="individual objective">
                <h2 class="content">objective</h2>
                <p class="content">(目標)</p>
            </div>

            <div class="key_result_gather">
                <div class="individual key_result">
                    <h2 class="content">Key Result</h2>
                    <p class="content">(主な結果)</p>
                </div>
                <div class="individual key_result">
                    <h2 class="content">Key Resul</h2>
                    <p class="content">(主な結果)</p>
                </div>
                <div class="individual key_result">
                    <h2 class="content">Key Resul</h2>
                    <p class="content">(主な結果)</p>
                </div>
            </div>
        </div>
        <div class="individual_objective">
            <div class="individual objective">
                <h2 class="content">objective</h2>
                <p class="content">(目標)</p>
            </div>

            <div class="key_result_gather">
                <div class="individual key_result">
                    <h2 class="content">Key Result</h2>
                    <p class="content">(主な結果)</p>
                </div>
            </div>
        </div>

        <div class="individual_objective">
            <div class="individual objective">
                <h2 class="content">objective</h2>
                <p class="content">(目標)</p>
            </div>

            <div class="key_result_gather">
                <div class="individual key_result">
                    <h2 class="content">Key Result</h2>
                    <p class="content">(主な結果)</p>
                </div>
                <div class="individual key_result">
                    <h2 class="content">Key Resul</h2>
                    <p class="content">(主な結果)</p>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection
