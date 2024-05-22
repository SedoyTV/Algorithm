<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://private-user-images.githubusercontent.com/74038190/325895940-dad5d025-91c3-43b9-9a3d-1c9266f77cb7.gif?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTYzMTkyMTMsIm5iZiI6MTcxNjMxODkxMywicGF0aCI6Ii83NDAzODE5MC8zMjU4OTU5NDAtZGFkNWQwMjUtOTFjMy00M2I5LTlhM2QtMWM5MjY2Zjc3Y2I3LmdpZj9YLUFtei1BbGdvcml0aG09QVdTNC1ITUFDLVNIQTI1NiZYLUFtei1DcmVkZW50aWFsPUFLSUFWQ09EWUxTQTUzUFFLNFpBJTJGMjAyNDA1MjElMkZ1cy1lYXN0LTElMkZzMyUyRmF3czRfcmVxdWVzdCZYLUFtei1EYXRlPTIwMjQwNTIxVDE5MTUxM1omWC1BbXotRXhwaXJlcz0zMDAmWC1BbXotU2lnbmF0dXJlPThmYzkyMTFhZTMwOWIwZjUxMmEyMmI4NTUwZTg5OWZkNzFlZDQ1MGZlOWVlNDc2NDE1ZmNkYmMwNWEyY2E0ZmEmWC1BbXotU2lnbmVkSGVhZGVycz1ob3N0JmFjdG9yX2lkPTAma2V5X2lkPTAmcmVwb19pZD0wIn0.GCFuZEDSiHMAsRpNZXpuGLe8zp9X3GuLgnjEqydFXXE" width="400" alt="Laravel Logo"></a></p>


<h1 align="center">Проект по алгоритмам доступен по  <a href="http://localhost:8000" >адресу</h1>

<h2 align="center">Установка и запуск</h2>

1. Запустите командную оболочку Bash


2. Клонируйте репозиторий:
    ```
   git clone git@github.com:SedoyTV/Algorithm.git
    ```

3. Перейдите в директорию проекта:
    ```
    cd Algorithm
   ```

4. В командной строке введите
   ```
    docker-compose up --build -d
   ```

5. В командной строке введите
   ```
   ./setup.sh
   ```

6. Дождитесь выполнения скрипта


7. Откройте браузер и перейдите по адресу
   ```
   http://localhost:8000
   ```


<h2 align="center">Описание страниц</h2>

<h2 align="center"> 1. Подсчет различных символов в строке</h2>

**URL:** /count-symbol

**Описание:** Реализует алгоритм подсчета различных символов в строке. Принимает строку из HTTP запроса и возвращает массив, где ключ — символ, а значение — количество символов.

**Пример запроса:**
***На вход подается строка через ключ text***

***command bash***

```
curl -X POST "http://localhost:8000/count-symbol?text=hello%20world"
```
***postman  / insomnia***
```
localhost:8000/count-symbol?text=hello world
```

**Пример ответа:**
```
{
	"h": 1,
	"e": 1,
	"l": 3,
	"o": 2,
	" ": 1,
	"w": 1,
	"r": 1,
	"d": 1
}
```

<h2 align="center">2. Поиск минимального значения в массиве</h2>

**URL:** /min-number

**Описание:** Реализует алгоритм поиска минимального значения в массиве. Принимает массив чисел из HTTP запроса и возвращает минимальное значение.

**Пример запроса:**
***На вход подается массив чисел через ключ array***

***command bash***
```
curl -X POST "http://localhost:8000/min-number?array=10,20,30,5,40,50"
```
***postman  / insomnia***
```
localhost:8000/min-number?array=10,20,30,5,40,50
```

**Пример ответа:**
{
	"Минимальное число": 5
}

<h2 align="center">3. Подсчет суммы нечетных элементов массива</h2>

**URL:** /odd-sum

**Описание:** Реализует алгоритм подсчета суммы нечетных элементов массива. Принимает массив чисел из HTTP запроса и возвращает сумму нечетных элементов.

**Пример запроса:**
***На вход подается массив чисел через ключ array***

***command bash***
```
curl -X POST "http://localhost:8000/odd-sum?array=1,2,3,4,5,6,7,8,9,10"
```
***postman  / insomnia***
```
localhost:8000/odd-sum?array=1,2,3,4,5,6,7,8,9,10
```

**Пример ответа:**
{
	"Сумма нечетных чисел": 25
}

<h2 align="center">4. Склонение окончания слова в зависимости от числа</h2>

**URL:** /declension

**Описание:** Реализует алгоритм для склонения окончания слова в зависимости от числа. Принимает целое число из HTTP запроса и возвращает соответствующее слово с правильным окончанием.


**Пример запроса:**

***На вход подается число через ключ number***

***command bash***
```
curl -X POST "http://localhost:8000/declension?number=27" 
```
***postman  / insomnia***
```
localhost:8000/declension?number=10&word=студент&word1=студента&word2=студентов
```

**Пример ответа:**
{
	"На учебе": "3 студента"
}


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>  
