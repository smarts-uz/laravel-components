<section class="">

    <!--Modal-->
    <div class="w-full">

        <div class="bg-white">

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="d-flex justify-content-center">
                <!--Title-->
                <div class="">
                    <div class="">
                        <img src="http://www.rtmc.uz/wp-content/uploads/2017/03/uztelecom.png"
                             alt="">
                        <br>
                        <h5>Система электронных заявок</h5>
                    </div>

                    <!--Body-->
                    <form name="eri_form" action="#" id="eri_form" method="post">
                        @csrf
                        <div>
                            <label class="" for="">Выберите ключ</label>
                            <select id='social' class="w-full" name="key" onchange="cbChanged(this)" style='min-width:400px'>
                                <option>12313</option>
                            </select>
                        </div>
                        <script !src="">
                            $(document).ready(function(){
                                $("#social").select2({
                                    templateResult: formatState
                                });
                            });

                            function formatState (state) {
                                var option = document.getElementById(state.id);
                                var vo = $(option).attr('vo');
                                if (vo !== undefined)
                                {
                                    var data = JSON.parse(vo);
                                    var textValid = 'до ';
                                    if (data.expired)
                                        textValid = 'истекший ';
                                    var $state = $(
                                        '<span >'+
                                        state.text + '<br>'+
                                        data.TIN + '<br>'+
                                        textValid + formatDate(data.validTo) +
                                        '</span>'

                                    );
                                    return $state;
                                }
                            }
                            function formatDate(date) {
                                var d = new Date(date),
                                    month = '' + (d.getMonth() + 1),
                                    day = '' + d.getDate(),
                                    year = d.getFullYear();

                                if (month.length < 2)
                                    month = '0' + month;
                                if (day.length < 2)
                                    day = '0' + day;

                                return [year, month, day].join('-');
                            }
                        </script>
                        <div hidden id="keyId" class="none"></div>

                        <input type="hidden" name="eri_fullname" id="eri_fullname">
                        <input type="hidden" name="eri_inn" id="eri_inn">
                        <input type="hidden" name="eri_pinfl" id="eri_pinfl">
                        <input type="hidden" name="eri_sn" id="eri_sn">
                        <textarea hidden class="none" name="eri_data" id="eri_data">Authorization</textarea>
                        <textarea hidden class="none" name="eri_hash" id="eri_hash"></textarea>


                        <!--Footer-->
                        <div class="d-flex justify-content-evenly m-5">
                            <button type="button"
                                    class="btn btn-success"
                                    id="eri_sign" onclick="sign()">
                                Вход
                            </button>
                            <button type="button"
                                    class="btn btn-primary"
                                    id="eri_sign"
                                    onclick="uiLoadKeys()"> Обновлять
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</section>
