    <div class="form-group">
        <label>
            <input type="radio" id="sms" name="method" value="sms" /> SMS
        </label>
        <label>
            <input type="radio" id="email" name="method" value="email" /> Email
        </label>
        <label>
            <input type="radio" id="telegram" name="method" value="telegram" /> Telegram
        </label>
    </div>
    <button type="button" onclick="sendMethod()">Получить код</button>
    
    <div class = "Code"></div>

    <div class = "CheckCode" style="display:none">
    <input type="text" id="TextCheckCode">
    <br>
    <button type="button" onclick="CheckCode()">Подтвердить код</button>
    </div>

<script>
    function sendMethod() {
            const sms = document.getElementById('sms');
            const email = document.getElementById('email');
            const telegram = document.getElementById('telegram');

            let selectedMethod = null;

            if (sms.checked) {
                selectedMethod = sms.value;
            } else if (email.checked) {
                selectedMethod = email.value;
            } else if (telegram.checked) {
                selectedMethod = telegram.value;
            }

            if (selectedMethod) {
                let formdada = new FormData();
                formdada.append('Option' , selectedMethod);

                document.querySelector('.Code').innerHTML = '';
                let res = fetch('http://localhost:8000/SetOption' , {
                method: 'POST',
                body: formdada
            }).then(response => {

            // Проверяем, успешен ли ответ
            if (!response.ok) {
                throw new Error('Запрос не успешный !');
            }
                return response.json(); // Преобразуем ответ в JSON
            })
            .then(data => {
                document.querySelector('.Code').innerHTML += `<p>Ваш код: ${data['Code']}</p>`; // Работаем с полученным кодом
                document.querySelector('.CheckCode').style.display = "block";
            })
            .catch(error => {
                console.error('Не удалось получить ответ от Route:', error);
            });
            } else {
                alert('Пожалуйста, выберите метод подтверждения.');
            }
        }
    
    function CheckCode() {

        let formdada = new FormData();
        formdada.append('CheckCode' , document.getElementById('TextCheckCode').value);
        
        let res = fetch('http://localhost:8000/CheckCode' , {
                method: 'POST',
                body: formdada
            });
    }
</script>