## Refactoring 과제

이 프로젝트는 [bestmomo/laravel5-5-example](https://github.com/bestmomo/laravel5-5-example)을 기초로 합니다.
DB는 편의상 sqlite에서 동작하도록 설정했습니다.
아래 [Installation](#installation)을 따라 초기화 하신 후, `php artisan serve`로 샘플 페이지를 구동하실 수 있습니다.

과제 해결 시, 
- 코드가 수정될 경우 commit 해서 보내주세요.
- 코드로 표현하기 어려운 부분은 글로(메일이나 주석 등) 설명해주시면 됩니다.
- 과제를 전달하는 방식, 커뮤니케이션 방식 등 정해진 규칙은 없습니다. 

### 필수 과제

아래 요구 사항을 해결해주세요.
- ISSUE 1. xxxxxx 이후의 commit부터 코드를 리뷰 해주세요. 가장 심각하다고 생각하는 문제 3가지만 언급하셔도 좋습니다. 
- ISSUE 2. commit 자체에는 어떤 문제가 있나요? 어떻게 정리하고 싶으신가요?
- ISSUE 3. FatController를 refactoring 해주세요. PR을 보내신다면 어떻게 설명을 써주실 건가요? 

### 선택 과제

아래 5가지 요구 사항 중 2가지를 골라 해결해주세요.

- ISSUE 4. xxxxxx 역할을 하는 Abc Class에 Unit Test를 붙여주시고, 필요하다면 refactoring 해주세요.
- ISSUE 5. Post의 제목이 노출되는 모든 화면에서 제목 옆에 Category를 아래 규칙에 맞게 표시해주세요.
  - Category 1 : 빨강
  - Category 2 : 파랑
  - Category 3 : 초록
- ISSUE 6. AWS free tier로 단일 인스턴스에서 서비스되던 이 사이트가 TV에 광고되고 동시 접속자 수 1,000으로 한 시간 동안 유지될 것으로 예상된다면 어떤 준비를 하시겠습니까? 
- ISSUE 7. 이 프로젝트를 최신화(PHP, Laravel, 기타 라이브러리 등) 한다면 어떻게 계획을 세우시겠습니까? 이대로 괜찮다는 동료를 어떻게 설득하고, 어떤 일정으로 공유하시겠습니까? 
- ISSUE 8. 이외에 이 프로젝트에서 refactoring이 필요하다고 생각하시는 게 있나요?


## Laravel 5-5 example ##

**Laravel 5-5 example** is a tutorial application.

### Installation ###

* type `git clone https://github.com/bestmomo/laravel5-5-example.git projectname` to clone the repository 
* type `cd projectname`
* type `composer install`
* copy *.env.example* to *.env*
* type `php artisan key:generate`to generate secure key in *.env* file
* type `touch database/database.sqlite` to create the file
* type `php artisan vendor:publish --provider="Bestmomo\LaravelEmailConfirmation\ServiceProvider" --tag="confirmation:migrations"` to publish email confirmation migration
* type `php artisan migrate --seed` to create and populate tables
* edit *.env* for emails configuration

### Include ###

* [Styleshout](https://www.styleshout.com/) for front template
* [CKEditor](http://ckeditor.com) the great editor
* [Elfinder](https://github.com/Studio-42/elFinder) the nice file manager
* [Sweet Alert](http://t4t5.github.io/sweetalert/) for the cool alerts
* [AdminLTE](https://adminlte.io/themes/AdminLTE/index2.html) the great admin template
* [Gravatar](https://github.com/creativeorange/gravatar) the Gravatar package
* [Intervention Image](http://image.intervention.io/) for image manipulation
* [Email confirmation](https://github.com/bestmomo/laravel-email-confirmation) the package for email confirmation
* [Artisan language](https://github.com/bestmomo/laravel-artisan-language) the package for language strings management
* [Laravel debugbar](https://github.com/barryvdh/laravel-debugbar)
* [Etrepat baum](https://github.com/etrepat/baum) for comments management

### Features ###

* Home page
* Custom error pages 403, 404 and 503
* Authentication (registration, login, logout, password reset, mail confirmation, throttle)
* Users roles : administrator (all access), redactor (create and edit post, upload and use medias in personnal directory), and user (create comment in blog)
* Blog with nested comments
* Search in posts
* Tags on posts
* Contact us page
* Admin dashboard with users, posts, articles, medias, settings, notifications and comments
* Multi users medias gestion
* Localization (English, French and Chinese)
* Application tests
* Thumbs creation for images
* Notifications to send emails and notify redactors for new comments

### Tricks ###

To use application the database is seeding with users :

* Administrator : email = admin@la.fr, password = admin
* Redactor : email = redac@la.fr, password = redac
* User : email = walker@la.fr, password = walker
* User : email = slacker@la.fr, password = slacker

### Tests ###

When you want to launch the tests refresh and populate the database :

`php artisan migrate:fresh --seed`

You must have default settings and **en** language. You must also add provider in **config/app.php**.

You can then use Dusk.

### License ###

This example for Laravel is open-sourced software licensed under the MIT license
