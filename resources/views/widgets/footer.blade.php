<!-- footer -->
@widget('SearchConsole')
<section id="footer" class="blue footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="phone"><span class="color-red">8 4742</span> 27 12 71</div>
            </div>
            <div class="col-sm-6">
                <div class="soc-seti">
                    <div>
                        <a class="img" href="https://www.facebook.com/pages/%D0%9B%D0%B8%D0%BF%D0%B5%D1%86%D0%BA-%D0%BD%D0%B8%D0%B6%D0%BD%D0%B8%D0%B9-%D0%BF%D0%B0%D1%80%D0%BA/192934257434069" target="_blank"><img class="white-hover" src="{{ asset('img/soc1.png') }}"></a>
                        <a class="img" href="https://www.instagram.com/48_parki_48/" target="_blank"><img class="white-hover" src="{{ asset('img/soc2.png') }}"></a>
                        <a class="img" href="https://ok.ru/parki48" target="_blank"><img class="white-hover" src="{{ asset('img/soc3.png') }}"></a>
                        <a class="img" href="https://vk.com/parki48" target="_blank"><img class="white-hover" src="{{ asset('img/soc4.png') }}"></a>
                        <!-- <a class="img" href="#"><img class="white-hover" src="{{ asset('img/soc5.png') }}"></a> -->
                    </div>
                    
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="redseparator-big">
                <div class="big-circle hidden-xs hidden-sm">
                    <img src="{{ asset('img/big-logo.png') }}">
                </div>
            </div>
            <div class="col-sm-12 all-left">
                <div>{{ trans('widgets/footer.adreass') }}</div>
                <div><span class="color-red">{{ trans('widgets/footer.budn') }}</span> 10:00-22:00 <span class="color-red">{{ trans('widgets/footer.vih') }}</span> 10:00-23:00</div>
            </div>
            <div class="clearfix"></div>
            
            <div class="col-sm-6 color-ser margin-top-2">
                {{ trans('widgets/footer.year') }}
            </div>
            <div class="col-sm-6 all-right margin-top-2">
                made in <a class="img color-red red-hover" href="http://octavian48.ru/" title="Разработка и продвижение сайтов">OCTAVIAN</a>
            </div>
        </div>
    </div>
</section>

<!-- end footer --> 
