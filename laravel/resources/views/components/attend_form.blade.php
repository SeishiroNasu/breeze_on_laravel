<form action="/work" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="date" name="work_date" max="9999-12-31">
            <div class="p-4 bg-white shadow w-128 my-2">
                <div class="relative inline-flex p-2">
                    <div class="pr-2 pt-1">
                        午前
                    </div>　　
                    <select class="border border-gray-300 text-gray-600 text-center h-10 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option selected>出勤</option>
                        <option>欠勤</option>
                    </select>
                    <div class="pr-4"></div>
                    <select name="am_start_h" class="border border-gray-300 text-gray-600 text-center h-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09" selected>09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                    </select>
                    <div class="px-2 pt-1">
                        :
                    </div>
                    <select name="am_start_m" class="border border-gray-300 text-gray-600 text-center h-10 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option value="00" selected>00</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                    </select>
                    <div class="px-4 pt-1">
                        ~
                    </div>
                    <select name="am_end_h" class="border border-gray-300 text-gray-600 text-center h-10 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12" selected>12</option>
                        <option value="13">13</option>                   
                    </select>
                    <div class="px-2 pt-1">
                        :
                    </div>
                    <select name="am_end_m" class="border border-gray-300 text-gray-600 text-center h-10 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option value="00" selected>00</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                    </select>
                    <div class="pr-4"></div>
                    <select name="am_place" class="border border-gray-300 text-gray-600 text-center h-10 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option value="現場A" selected>現場A</option>
                        <option value="現場B">現場B</option>
                        <option value="現場C">現場C</option>
                        <option value="本社">本社</option>
                    </select>
                </div>

                <div class="relative inline-flex p-2">
                    <div class="pr-2 pt-1">
                        午後　　
                    </div>
                    <select class="border border-gray-300 text-gray-600 text-center h-10 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option selected>出勤</option>
                        <option>欠勤</option>
                    </select>
                    <div class="pr-4"></div>
                    <select name="pm_start_h" class="border border-gray-300 text-gray-600 text-center h-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option value="12">12</option>
                        <option value="13" selected>13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>                     
                    </select>
                    <div class="px-2 pt-1">
                        :
                    </div>
                    <select name="pm_start_m" class="border border-gray-300 text-gray-600 text-center h-10 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option value="00" selected>00</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                    </select>
                    <div class="px-4 pt-1">
                        ~
                    </div>
                    <select name="pm_end_h" class="border border-gray-300 text-gray-600 text-center h-10 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18" selected>18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>   
                    </select>
                    <div class="px-2 pt-1">
                        :
                    </div>
                    <select name="pm_end_m" class="border border-gray-300 text-gray-600 text-center h-10 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option value="00" selected>00</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                    </select>
                    <div class="pr-4"></div>
                    <select name="pm_place" class="border border-gray-300 text-gray-600 text-center h-10 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option value="現場A" selected>現場A</option>
                        <option value="現場B">現場B</option>
                        <option value="現場C">現場C</option>
                        <option value="本社">本社</option>
                    </select>
                </div><br>
                <div class="relative inline-flex p-2">
                    <div class="pr-2 pt-1">
                        休憩　　
                    </div>
                    <select class="border border-gray-300 text-gray-600 text-center h-10 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option value="00:00" selected>00:00</option>
                        <option value="00:15">00:15</option>
                        <option value="00:30">00:30</option>
                        <option value="00:45">00:45</option>
                        <option value="01:00">01:00</option>
                        <option value="01:15">01:15</option>
                        <option value="01:30">01:30</option>
                        <option value="01:45">01:45</option>
                        <option value="02:00">02:00</option>
                    </select>
                </div><br>
                <button type="submit" class="btn btn-success my-2 p-2 w-32">登録</button>
            </form>