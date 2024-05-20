# Проект по алгоритмам

Этот проект посвящен реализации различных алгоритмов. Проект доступен по адресу http://localhost:8000.

## Описание страниц

### 1. Подсчет различных символов в строке
**URL:** /count-symbol

**Описание:** Реализует алгоритм подсчета различных символов в строке. Принимает строку из HTTP запроса и возвращает массив, где ключ — символ, а значение — количество символов.

**Пример запроса:**

***command***
```
curl -X POST http://localhost:8000/count-symbol -d \"text=hello world\"
```
***postman  / insomnia***
```
localhost:8000:count-symbol?text=hello world
```

**Пример ответа:**
```
{
  \"П\": 1,
  \"р\": 2,
  \"и\": 1,
  \"м\": 1,
  \"е\": 2,
  \"т\": 2,
  \"к\": 1,
  \"с\": 1,
  \"а\": 1
}
```

### 2. Поиск минимального значения в массиве
**URL:** /min-number

**Описание:** Реализует алгоритм поиска минимального значения в массиве. Принимает массив чисел из HTTP запроса и возвращает минимальное значение.

**Пример запроса:**
curl -X POST http://localhost:8000/min-number -d \"array=[3, 1, 4, 1, 5, 9, 2]\"

**Пример ответа:**
{
  \"min\": 1
}

### 3. Подсчет суммы нечетных элементов массива
**URL:** /odd-sum

**Описание:** Реализует алгоритм подсчета суммы нечетных элементов массива. Принимает массив чисел из HTTP запроса и возвращает сумму нечетных элементов.

**Пример запроса:**
curl -X POST http://localhost:8000/odd-sum -d \"array=[3, 1, 4, 1, 5, 9, 2]\"

**Пример ответа:**
{
  \"sum\": 19
}

### 4. Склонение окончания слова в зависимости от числа
**URL:** /declension

**Описание:** Реализует алгоритм для склонения окончания слова в зависимости от числа. Принимает целое число из HTTP запроса и возвращает соответствующее слово с правильным окончанием.

**Пример запроса:**
curl -X POST http://localhost:8000/declension -d \"number=21\"

**Пример ответа:**
{
  \"result\": \"21 студент\"
}

## Установка и запуск

1. Клонируйте репозиторий:
    git clone git@github.com:SedoyTV/Algorithm.git

2. Перейдите в директорию проекта:
    cd Algorithm
3. В командной строке введите docker-compose up --build -d

4. В командной строке введите ./setup.sh

5. Дождитесь выполнения скрипта

6. Откройте браузер и перейдите по адресу http://localhost:8000.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>