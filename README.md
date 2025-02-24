# laravel8

 라라벨 설치
   1.  composer 설치
   2.  composer 명령어 ( 라라벨 8버전 설치 )

```
  composer create-project --prefer-dist laravel/laravel laravel_crud "8.*"
```

   4.  터미널 laravel 서버 On

```
  php artisan serve
```


   5.  .env 파일에서 DB 세팅
   6.  DB테이블 설정

```
 php artisan make:migration create_boards_table --create=boards
```

   7.  php artisan migrate로 DB 테이블 설정 가능
