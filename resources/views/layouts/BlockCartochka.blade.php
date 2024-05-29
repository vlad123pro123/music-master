<div class="block-container-tovar">
    <div class="block-img">
        <div class="record-container">
            <div class="records" id="record">
                <img src=" {{ asset('images/plastinka.svg') }}" alt="Record" class="record-img">
            </div>
        </div>
        <img src="{{ asset('images/IzPlast2.png')}}" alt="Background" class="background-img">
    </div>
    <div class="block-txt">
        <h2 class="name">And One-Milate</h2>
        <div class="block-soderhanie">
            <div class="soderhanie-A">
                <strong>SIDE A</strong>
                <p>A1. Daydreamer</p>
                <p>A2. Best For Last</p>
                <p>A3. Chasing Pavements</p>
                <p>A4. Cold Shoulder</p>
                <p>A5. Crazy For You</p>
            </div>
            <div class="soderhanie-B">
                <strong>SIDE B</strong>
                <p>B1. First Love</p>
                <p>B2. Right As Rain</p>
                <p>B3. Make You Feel My Love</p>
                <p>B4. My Same</p>
                <p>B5. Tired</p>
            </div>
        </div>
        <div class="dop-opisanie">
            <span>Жанр:Pop</span>
            <span>Год издания:2018</span>
            <span>Категория:Альбом</span>
        </div>
        <div class="prise">
            <h4>Цена:</h4>
            <p>150RUB</p>
        </div>
        <button class="bue">Купить пластинку</button>
    </div>
</div>
<div class="block-perehod">
    <audio class="aud" controls src="{{ asset('audio/Wallem.mp3') }}" id="audio"></audio>
    <div class="block-perehod-opisanie">
        <p>Данная пластинка была созда на 1230 году великим музыкантом Строком Владиславом Андреевичом</p>
    </div>
</div>
<script>
    const audio = document.getElementById("audio");
    const record = document.getElementById("record");

    audio.onplay = function() {
        record.classList.add('rekk'); // Добавляем класс, чтобы начать анимацию вращения
    };

    audio.onpause = function() {
        record.classList.remove('rekk'); // Убираем класс, чтобы остановить анимацию вращения
    };

</script>
