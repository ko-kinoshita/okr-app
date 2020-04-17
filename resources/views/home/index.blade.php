@extends('home.app')

@section('content')
<div class="okr">
    <section class="section_wrap">
        <h1 class="title">会社</h1>
        <div class="company_objective">
            <div class="company objective">
                @foreach($items as $item)
                <h2 class="content">{{ $item->id }}</h2>
                <p class="content">{{ $item->objective }}</p>
                @endforeach
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
