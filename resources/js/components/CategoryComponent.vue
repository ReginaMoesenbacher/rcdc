template:

<div class="container">
    <div class="col">

        <!--@php($count = 0)-->
        <!--@foreach($drinks as $drink)-->

        <!--<div class="row">-->


            <!--<div>-->
                <!--<h3>-->
                    <!--<a href="{{ route("index", ["category" => $drink->slug]) }}">{{$drink->category_string}}</a>-->
                <!--</h3>-->
                <!--<img src="{{ asset('images/cocktail.svg') }}" alt="Cocktail">-->
                <!--<p>Log in, then you can start mixing your own individual Cocktail.<br/> Add all the-->
                    <!--ingredients and you'll see-->
                    <!--if you have the talent for a barkeeper.</p>-->
            <!--</div>-->

            <!--<img src="{{ $img[$count]->category_img}}" alt="">-->

            <!--@php(++$count)-->
        <!--</div>-->


        <!--@endforeach-->

        {{info}}
    </div>
</div>

<script>

    new Vue({

        data() {
            return {
                info: null
            }
        },


        mounted () {
            axios
                .get('https://www.thecocktaildb.com/api/json/v1/1/list.php?c=list')
                .then(response => (this.info = response))
        }

    });


</script>