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
                console.log(data['Code']); // Работаем с полученным кодом
            })
            .catch(error => {
                console.error('Не удалось получить ответ от Route:', error);
            });
            } else {
                alert('Пожалуйста, выберите метод подтверждения.');
            }
        }
</script>