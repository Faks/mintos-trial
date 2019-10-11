@extends('layouts.app')

@section('content')
    <table class="wikitable sortable jquery-tablesorter" id="fluff-off">
        <thead>
        <tr>
            <th scope="col" class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Word</th>
            <th scope="col" class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Parts of
                speech
            </th>
            <th scope="col" class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending"><abbr
                    title="Oxford English Corpus">OEC</abbr> rank
            </th>
            <th scope="col" class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending"><a
                    href="/wiki/Corpus_of_Contemporary_American_English"
                    title="Corpus of Contemporary American English">COCA</a>
                rank<sup id="cite_ref-6" class="reference"><a href="#cite_note-6">[6]</a></sup></th>
            <th scope="col" class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending"><a
                    href="/wiki/Dolch_word_list" title="Dolch word list">Dolch level</a>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/the#English" class="extiw" title="wikt:the">the</span></td>
        
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/be#English" class="extiw" title="wikt:be">be</span></td>
        
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/to#English" class="extiw" title="wikt:to">to</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/of#English" class="extiw" title="wikt:of">of</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/and#English" class="extiw" title="wikt:and">and</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/a#English" class="extiw" title="wikt:a">a</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/in#English" class="extiw" title="wikt:in">in</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/that#English" class="extiw" title="wikt:that">that</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/have#English" class="extiw" title="wikt:have">have</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/I#English" class="extiw" title="wikt:I">I</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/it#English" class="extiw" title="wikt:it">it</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/for#English" class="extiw" title="wikt:for">for</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/not#English" class="extiw" title="wikt:not">not</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/on#English" class="extiw" title="wikt:on">on</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/with#English" class="extiw" title="wikt:with">with</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/he#English" class="extiw" title="wikt:he">he</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/as#English" class="extiw" title="wikt:as">as</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/you#English" class="extiw" title="wikt:you">you</span></td>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/do#English" class="extiw" title="wikt:do">do</span></td>
        
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/at#English" class="extiw" title="wikt:at">at</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/this#English" class="extiw" title="wikt:this">this</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/but#English" class="extiw" title="wikt:but">but</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/his#English" class="extiw" title="wikt:his">his</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/by#English" class="extiw" title="wikt:by">by</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/from#English" class="extiw" title="wikt:from">from</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/they#English" class="extiw" title="wikt:they">they</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/we#English" class="extiw" title="wikt:we">we</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/say#English" class="extiw" title="wikt:say">say</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/her#English" class="extiw" title="wikt:her">her</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/she#English" class="extiw" title="wikt:she">she</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/or#English" class="extiw" title="wikt:or">or</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/an#English" class="extiw" title="wikt:an">an</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/will#English" class="extiw" title="wikt:will">will</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/my#English" class="extiw" title="wikt:my">my</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/one#English" class="extiw" title="wikt:one">one</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/all#English" class="extiw" title="wikt:all">all</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/would#English" class="extiw" title="wikt:would">would</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/there#English" class="extiw" title="wikt:there">there</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/their#English" class="extiw" title="wikt:their">their</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/what#English" class="extiw" title="wikt:what">what</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/so#English" class="extiw" title="wikt:so">so</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/up#English" class="extiw" title="wikt:up">up</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/out#English" class="extiw" title="wikt:out">out</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/if#English" class="extiw" title="wikt:if">if</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/about#English" class="extiw" title="wikt:about">about</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/who#English" class="extiw" title="wikt:who">who</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/get#English" class="extiw" title="wikt:get">get</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/which#English" class="extiw" title="wikt:which">which</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/go#English" class="extiw" title="wikt:go">go</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/me#English" class="extiw" title="wikt:me">me</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/when#English" class="extiw" title="wikt:when">when</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/make#English" class="extiw" title="wikt:make">make</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/can#English" class="extiw" title="wikt:can">can</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/like#English" class="extiw" title="wikt:like">like</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/time#English" class="extiw" title="wikt:time">time</span></td>
        
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/no#English" class="extiw" title="wikt:no">no</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/just#English" class="extiw" title="wikt:just">just</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/him#English" class="extiw" title="wikt:him">him</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/know#English" class="extiw" title="wikt:know">know</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/take#English" class="extiw" title="wikt:take">take</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/people#English" class="extiw" title="wikt:people">people</a>
            </td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/into#English" class="extiw" title="wikt:into">into</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/year#English" class="extiw" title="wikt:year">year</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/your#English" class="extiw" title="wikt:your">your</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/good#English" class="extiw" title="wikt:good">good</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/some#English" class="extiw" title="wikt:some">some</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/could#English" class="extiw" title="wikt:could">could</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/them#English" class="extiw" title="wikt:them">them</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/see#English" class="extiw" title="wikt:see">see</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/other#English" class="extiw" title="wikt:other">other</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/than#English" class="extiw" title="wikt:than">than</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/then#English" class="extiw" title="wikt:then">then</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/now#English" class="extiw" title="wikt:now">now</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/look#English" class="extiw" title="wikt:look">look</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/only#English" class="extiw" title="wikt:only">only</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/come#English" class="extiw" title="wikt:come">come</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/its#English" class="extiw" title="wikt:its">its</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/over#English" class="extiw" title="wikt:over">over</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/think#English" class="extiw" title="wikt:think">think</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/also#English" class="extiw" title="wikt:also">also</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/back#English" class="extiw" title="wikt:back">back</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/after#English" class="extiw" title="wikt:after">after</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/use#English" class="extiw" title="wikt:use">use</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/two#English" class="extiw" title="wikt:two">two</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/how#English" class="extiw" title="wikt:how">how</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/our#English" class="extiw" title="wikt:our">our</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/work#English" class="extiw" title="wikt:work">work</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/first#English" class="extiw" title="wikt:first">first</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/well#English" class="extiw" title="wikt:well">well</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/way#English" class="extiw" title="wikt:way">way</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/even#English" class="extiw" title="wikt:even">even</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/new#English" class="extiw" title="wikt:new">new</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/want#English" class="extiw" title="wikt:want">want</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/because#English" class="extiw" title="wikt:because">because</a>
            </td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/any#English" class="extiw" title="wikt:any">any</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/these#English" class="extiw" title="wikt:these">these</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/give#English" class="extiw" title="wikt:give">give</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/day#English" class="extiw" title="wikt:day">day</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/most#English" class="extiw" title="wikt:most">most</span></td>
        </tr>
        <tr>
            <td><span href="https://en.wiktionary.org/wiki/us#English" class="extiw" title="wikt:us">us</span></td>
        </tr>
        </tbody>
        <tfoot></tfoot>
    </table>
@stop

<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script>
    
    
    $(function () {
        var results = [];
        $('#fluff-off tr > td').each(function () {
            var $tds = $(this).find('span');
            
            // console.log($tds.text());
            results.push($tds.text().trim());
        });
        
        console.log(results);
    });
    
    
    // console.log(matches);
    
    // console.log(x);
</script>
