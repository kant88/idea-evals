@extends('layouts.app')

@section('content')
<style>
        li {
            display: inline;
            padding-left:20px;
        }
</style>

<div class="container-fluid">
    
    <div class="row">
        
    <h1>アイデア評価のページ</h1>
        
    
    
    <h3 style="margin-top:50px;">1. アイデア評価のやり方</h3>
    <h4 style="margin-top:20px; margin-bottom:20px;">アイデア評価は下記の基準で行ってください。</h4>
    <table class="table table-striped table-bordered" style="table-layout: fixed;">
        <tr><th style="width:5%;">評価の点数</th><th style="width:45%;">独自性</th><th style="width:45%;">適正性</th></tr>
        <tr><td>5</td><td>極めて独自性の高いアイデアである。</td><td>課題に対する効果が著しく高いと思われる。</td></tr>
        <tr><td>4</td><td>独自性があり、よく考えられたアイデアである。</td><td>課題に対する効果が高いと思われる。</td></tr>
        <tr><td>3</td><td>一定の独自性が感じられる。</td><td>課題に対する一定の効果が見込まれる。</td></tr>
        <tr><td>2</td><td>課題を見ればすぐに思いつきそうな、ありふれたアイデアである。</td><td>課題に対する効果が期待できない。</td></tr>
        <tr><td>1</td><td>アイデアの体をなしていない。</td><td>かえって逆効果になると思われる。</td></tr>
    </table>
    <p>＊適正性の評価は、アイデアが実現した場合の効果だけでなく、実現する可能性を考慮して行ってください。<br>
    　例えば会社の規則を変えるには、経営層や上司を動かす必要があると思われます。
        説得が困難と思われるならば、適正性の評価は低くなる可能性があります。</p>
    <h3 style="margin-top:40px; margin-bottom:20px;">2. アイデア評価</h3>
    <h4 style="margin-top:20px; margin-bottom:20px;">以下の5つのアイデアについて、アイデア評価を行ってください。</h4>
    
    <?php $i = 0; ?>
    {!! Form::open(['route' => 'confirmEvalpost'], ['class'=>'form-horizontal']) !!}
    @if (count($ideas) > 0)
        @foreach ($ideas as $idea)
        <?php $i++; ?>
        <table class="table table-striped table-bordered" style="table-layout: fixed;">
            <tr><th style="width:5%;">id</th><th style="width:45%;">課題</th><th style="width:45%;">アイデア</th></tr>
            <tr><td>{{$idea->id}}</td><td>{{$idea->problem}}</td><td>{{$idea->content}}</td></tr>
        </table>
        
        <div class="form-group">
            <label class="col-sm-1 control-label">独自性：</label>
            <ul class="col-sm-5" style="list-style-type: none; padding:0;">
            <li>
                {!! Form::radio("originallity{$i}", 5, ['class' => 'form-control']) !!}
                {!! Form::label("originallity{$i}", '5', ['class' => 'radio-inline']) !!}
                {!! Form::hidden("idea_id{$i}","{$idea->id}") !!}
            </li>
            <li>
                {!! Form::radio("originallity{$i}", 4, ['class' => 'form-control']) !!}
                {!! Form::label("originallity{$i}", '4', ['class' => 'radio-inline']) !!}
                {!! Form::hidden("idea_id{$i}","{$idea->id}") !!}
            </li>
            <li>
                {!! Form::radio("originallity{$i}", 3, ['class' => 'form-control']) !!}
                {!! Form::label("originallity{$i}", '3', ['class' => 'radio-inline']) !!}
                {!! Form::hidden("idea_id{$i}","{$idea->id}") !!}
            </li>
            <li>
                {!! Form::radio("originallity{$i}", 2, ['class' => 'form-control']) !!}
                {!! Form::label("originallity{$i}", '2', ['class' => 'radio-inline']) !!}
                {!! Form::hidden("idea_id{$i}","{$idea->id}") !!}
            </li>
            <li>
                {!! Form::radio("originallity{$i}", 1, ['class' => 'form-control']) !!}
                {!! Form::label("originallity{$i}", '1', ['class' => 'radio-inline']) !!}
                {!! Form::hidden("idea_id{$i}","{$idea->id}") !!}
            </li>
            </ul>
            <label class="col-sm-1 control-label">適正性：</label>
            <ul class="col-sm-5" style="list-style-type: none;">
            <li>
                {!! Form::radio("appropriateness{$i}", 5, ['class' => 'form-control']) !!}
                {!! Form::label("appropriateness{$i}", '5', ['class' => 'radio-inline']) !!}
            </li>
            <li>
                {!! Form::radio("appropriateness{$i}", 4, ['class' => 'form-control']) !!}
                {!! Form::label("appropriateness{$i}", '4', ['class' => 'radio-inline']) !!}
            </li>
            <li>
                {!! Form::radio("appropriateness{$i}", 3, ['class' => 'form-control']) !!}
                {!! Form::label("appropriateness{$i}", '3', ['class' => 'radio-inline']) !!}
            </li>
            <li>
                {!! Form::radio("appropriateness{$i}", 2, ['class' => 'form-control']) !!}
                {!! Form::label("appropriateness{$i}", '2', ['class' => 'radio-inline']) !!}
            </li>
            <li>
                {!! Form::radio("appropriateness{$i}", 1, ['class' => 'form-control']) !!}
                {!! Form::label("appropriateness{$i}", '1', ['class' => 'radio-inline']) !!}
            </li>
            </ul>
        </div>
        <br><br><br>
        @endforeach
    @endif
    <div class="text-center" style="margin-bottom:50px;">
    <h4>提出後は戻れませんので、確認後クリックしてください。</h4>
    {!! Form::submit('アイデア評価を提出', ['class' => 'btn-lga btn-primary', 'style'=>'margin-top:10px']) !!}
    {!! Form::close() !!}
    </div>
    

@endsection