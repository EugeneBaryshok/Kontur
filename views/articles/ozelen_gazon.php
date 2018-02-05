<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$this->title = 'Устройство газонов';

$this->params['breadcrumbs'][] = ['label' => 'Озеленение', 'url' => ['/services/ozelen']];
// $this->params['breadcrumbs'][] = Yii::$app->controller->substr_content($this->title, '90');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
.dot li
{
 font-size:18px; 
}
</style>
<div class="introduction" >
    <div class="container">
        <h1 style="margin-bottom: 40px">Устройство <span class="green"> газонов</span></h1>
        <hr class="hr" align="left">
        <div class="row">
            <div class="col-md-5 col-lg-5" style="overflow: hidden;">

                <img class="intr_img" src="/img/bg_new_3.jpg" height="470">
            </div>
            <div class=" col-md-offset-1 col-lg-offset-1 col-md-6 col-lg-6"
                 style="padding-left: 30px; margin-top:0px;">
                <p style="font-size:18px;">
                    Компания <span class="text_logo" style="font-size: 16px;">KOHTYP</span> выполняет устройство газонов разной сложности независимо от рельефа местности.
                    Мы работаем в <span class="green_bold">Санкт-Петербурге и области</span>.

                </p>
                <p style="font-size:18px;">
                    Признаки хорошего <span class="green_bold">газона</span>:
                </p>
                <ul class="dot" id="main_ul" style="margin-bottom:65px ">

                    <li><span style="color:#959595"> <span class="green_bold">сплошной</span>, густой травостой из газонных растений лучших видов, насыщенный зелёный цвет;</span>
                    </li>
                    <li><span style="color:#959595"> высокая <span class="green_bold">плотность</span> побегообразования;</span>
                    </li>
                    <li><span style="color:#959595"> красивая <span class="green_bold">ровная текстура</span>;</span>
                    </li>
                    <li><span style="color:#959595"> <span class="green_bold">ровная</span>, но не обязательно горизонтальная, поверхность на всей площади создаваемого газона.</span>
                    </li>

                </ul>
                    <!-- <button class="purple_button" style=" margin-top: 55px;background-color:#3ca630">Прайс-лист</button> -->
                <button class="purple_button signup"><img src="/img/proj_button.png">Оставить заявку</button>
                 <a href="<?= Url::to(['price/ozelen'])?>">
                    <button class="purple_button"><img src="/img/price_button.png">Прайс-лист</button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="main_block">
    <div class="container">


        <div class="row">

            <h2 style="margin-bottom: 30px">Виды <span class="green">газонов:</span></h2>
            <hr class="hr" align="left">
            <div class="col-md-12 col-lg-12">
                <div class="row">
                    <h3 class="h3_main" style="margin-bottom: 30px"><span class="green">Обыкновенный</span> (садово-парковый) газон</h3>
                    <div class="col-md-6 col-lg-6 col-sm-12">

                        <p>
                            Наиболее часто встречающийся тип травяного покрытия. Это типичный городской газон, который
                            можно
                            увидеть на улице вдоль проезжей части, около дома, в скверах или парках, за которыми
                            осуществляется уход. Такое покрытие включает в себя смесь
                            различных газонных трав, различающихся по долголетию, ширине и высоте побегов, кущению и
                            другим характеристикам. Высота стрижки 5-8 см.
                            После становления плотной дернины в течение одного-двух лет (при создании посевным
                            способом), по траве можно ходить, играть на ней и пр.
                            При создании газона способом укладки готовой рулонной дернины - ходить по траве можно уже
                            через месяц. Чтобы покрытие не выглядело "голым",
                            его можно украсить с помощью посадки кустарников или деревьев.

                        </p>
                    </div>
                    <div class="col-md-5 col-lg-5 col-lg-offset-1 col-sm-12">
                        <img  class="intr_img" src="/img/gazon-1.jpg" width="450px">
                    </div>
                </div>
                <div class="row">
                    <h3 class="h3_main" style="margin-bottom: 30px"><span class="green">Партерный</span> газон</h3>
                    <div class="col-md-5 col-lg-5 col-sm-12">
                        <img  class="intr_img" src="/img/gazon-2.jpg" width="450px">
                    </div>
                    <div class="col-md-6 col-lg-6 col-lg-offset-1 col-sm-12">

                        <p>Этот тип покрытия пришел к нам из консервативной Англии. Он встречается, в основном, в
                            регулярных садах или парках, на
                            прилегающей территории дворцов и соборов. Это атрибут роскоши и традиционализма. В отличие
                            от обыкновенного, партерный газон не такой утилитарный и
                            универсальный, а скорее декоративный. Он включает в себя специальные сорта узких и низких
                            трав семейства злаковых, как правило, одного или двух видов
                            (для достижения однородности цвета и высоты покрытия). Ходить по траве категорически
                            запрещается, она требует частых стрижек на высоту 3–5 см.
                            Создается как с помощью укладки дерна, так и методом посева в теплый период года.

                        </p>
                    </div>
                </div>
                <div class="row">
                    <h3 class="h3_main" style="margin-bottom: 30px"><span class="green">Луговой</span> (мавританский) газон.</h3>
                    <div class="col-md-6 col-lg-6 col-sm-12">

                        <p>По сравнению с предыдущими двумя, – это скорее поляна, луг или лужайка с высокими злаковыми
                            травами, цветущими многолетними растениями.
                            То есть, по своему виду он максимально приближен к естественному растительному природному
                            покрову. Однако, он тоже требует ухода: 1-2 раза за сезон его необходимо
                            стричь, чтобы он более буйно разрастался. Внешний вид можно корректировать с помощью
                            добавления каких-либо сортов трав или цветущих растений.
                            Это самый неприхотливый газон, так как по нему можно ходить и бегать. Устройство газона
                            осуществляется, как правило, на больших территориях (для достижения
                            естественности) и в отдаленных уголках участка.

                        </p>
                    </div>
                    <div class="col-md-5 col-lg-5 col-lg-offset-1 col-sm-12">
                        <img  class="intr_img" src="/img/gazon3.jpg" width="450px">
                    </div>
                </div>
                <div class="row">
                    <h3 class="h3_main" style="margin-bottom: 30px"><span class="green">Специальные</span> газоны</h3>
                    <div class="col-md-5 col-lg-5 col-sm-12">
                        <img  class="intr_img" src="/img/gazon4.jpg" width="450px">
                    </div>
                    <div class="col-md-6 col-lg-6 col-lg-offset-1 col-sm-12">
                        <p>
                            Они предназначены для выдерживания повышенных нагрузок, поэтому используются для устройства
                            спортивных полей (футбольные, для регби, бейсбола и пр), детских площадок, укрепления откосов
                            в дорожном строительстве, в том числе для автомобильных парковок и пр. Могут создаваться на склонах.
                            В этом случае, в качестве основы требуется укладка газонной решетки.

                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!---->
<!--<div class="banner"-->
<!--     style="text-align: left; background:linear-gradient(to top, rgba(255,255,255,0.7), rgba(255, 255, 255, 1)), url(../img/grass.jpg) no-repeat center fixed; background-size: cover;">-->
<!--    <div class="container">-->
<!---->
<!--        <h2><span class="green"> Способы устройства </span> газона</h2>-->
<!--        <hr width="600" size="1" color="#d3d3d3" align="center">-->
<!--        <div class="row">-->
<!--            <div class="col-md-4 col-lg-4" style="overflow: hidden">-->
<!---->
<!--                <img src="img/leaves.jpg" width="300px">-->
<!--            </div>-->
<!--            <div class="col-md-8 col-lg-8 main_div_right">-->
<!---->
<!--                <p style="font-size: 20px">-->
<!--                    Всего существует три способа:-->
<!--                </p>-->
<!--                <ul class="dot" id="main_ul" style="margin-bottom:100px ">-->
<!---->
<!--                    <li><span style="color:black"> укладка рулонного газона;</span></li>-->
<!--                    <li><span style="color:black"> посев семян газонных трав;</span></li>-->
<!--                    <li><span style="color:black">  гидропосев.</span></li>-->
<!--                </ul>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="main_block gray_block">
    <div class="container">
        
        <div class="row">

            <h2><span class="green">Способы устройства </span> газона:</h2>
            <hr class="hr" align="left">

            <h3 class="h3_main" style="margin-bottom: 30px">Укладка <span class="green">рулонного</span> газона</h3>
            <div class="col-md-6 col-lg-6">
                <p>
                    Быстрый способ придать сразу красивый вид Вашему саду. Рулонный газон выращивается на специвльных
                    полях по особым технологиям.Главные его преимущества в
                    том, что рулонный газон можно устроить в максимально короткие сроки, а также он имеет высокую
                    устойчивость к сорнякам и к вытаптыванию.
                </p>
            </div>
            <div class="col-md-5 col-lg-5">
                <img src="/img/gazon5.jpg" width="300px">
            </div>
        </div>
        <div class="row">

            <h3 class="h3_main" style="margin-bottom: 30px"><span class="green">Посев</span></h3>
            <div class="col-md-6 col-lg-6">
                <p>
                    Традиционный способ посева семян применяется чаще других. Но времени на его создание уходит больше.
                    Требуется время на всходы семян (от 7 до 20 дней) и их
                    рост (от 20 до 40 дней до первой стрижки – высота травы 12-15 см). Всхожесть семян и их рост сильно
                    зависят от оптимального баланса воды и тепла.
                    Также требуется время на создание плотной дернины – на это уходит 1 -2 года при регулярной (3-4 раза
                    в месяц) стрижке. Другая проблема посевного газона это
                    наличие в нем сорных трав (обычно однолетних) не зависимо от качества подготовки почвы. Сорные
                    растения уходят при стрижке и кущении травы. Но и на это требуется
                    время.
                </p>
            </div>
            <div class="col-md-5 col-lg-5">
                <img src="/img/gazon6.jpg" width="300px">
            </div>
        </div>
        <div class="row">

            <h3 class="h3_main" style="margin-bottom: 30px"><span class="green">Гидропосев</span></h3>
            <div class="col-md-6 col-lg-6">
                <p>
                    Третий способ используется редко, особенно в ландшафтном дизайне, и заключается в нанесении семян в
                    составе специальных растворов на подготовленную поверхность
                    под давлением с помощью насосов.Обычно применяется при озеленении склонов, дорожных откосов.
                </p>
            </div>
            <div class="col-md-5 col-lg-5">
                <img src="/img/gazon7.jpg" width="300px">
            </div>
        </div>
    </div>
</div>

<div class="additional_block " style="  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(/img/ozelen_main_new.jpg) no-repeat center fixed;
    background-size: cover;
   ">
    <div class="container">
        <p class="additional_p" style="margin-bottom: 30px">
      
                    Компания <span class="text_logo">KOHTYP</span> оказывает широкий спектр услуг в области озеленения участка, в том числе устройство газонов.
                    Воспользуйтесь нашими услугами и мы превратим ваш сад в цветущий оазис.
                    <br/>
                    Цены на работы вы можете посмотреть в прайс-листе.

                </p>
                     <button class="purple_button signup"><img src="/img/proj_button.png">Заказать</button>
              <a href="<?= Url::to(['price/ozelen'])?>">
            <button class="purple_button"><img src="/img/price_button.png"> Цены</button>
        </a>
    </div>
</div>
