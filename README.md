## Refactoring 과제

이 프로젝트는 [bestmomo/laravel5-5-example](https://github.com/bestmomo/laravel5-5-example)을 기초로 합니다.
DB는 편의상 sqlite에서 동작하도록 설정했습니다.
아래 [Installation](#installation)을 따라 초기화 하신 후, `php artisan serve`로 샘플 페이지를 구동하실 수 있습니다.

과제 해결 시, 
- 코드가 수정될 경우 commit 해서 보내주세요.
- 코드로 표현하기 어려운 부분은 글로(메일이나 주석 등) 설명해주시면 됩니다.
- 코딩을 하실 땐, 실제 업무라고 가정하시고 평소에 작성하시는 수준의 코드로 부탁드립니다.
- 과제를 전달하는 방식, 커뮤니케이션 방식 등 정해진 규칙은 없습니다. 

### 필수 과제

아래 요구 사항을 해결해주세요.
- ISSUE 1. FatController와 여기서 사용된 클래스를 refactoring하고 commit 해주세요. 
  - refactoring 대상은 "과제 추가" 커밋(2bab784) 이후에서 확인하실 수 있습니다.
  - /how-to-lose-weight 요청은 personal trainer에게 나에게 맞는 체중 조절 솔루션을 문의하는 API입니다.
  - preferred_types_order에는 선호하는 솔루션 타입("DIET", "FITNESS", "CLINIC")이 있다면 그 순서대로 전달합니다.
  - life_style_tag에는 자신의 성향을 표현하는 tag("rich", "strong_will", "healthy", "enough_time")를 1개 이상 전달합니다.
  - request body 예시
```json
{
  "preferred_types_order": [
    "DIET",
    "FITNESS",
    "CLINIC"
  ],
  "life_style_tag": [
    "rich",
    "enough_time",
    "healthy"
  ]
}
``` 
- ISSUE 2. PR을 보내신다면 어떻게 설명을 써주실 건가요?

### 보너스 과제

필수 과제는 아니지만, 추가 점수를 드리기 위한 문제입니다.
아래 선택형 질문 목록 중 한가지 이상 골라 문제를 해결해주세요.
코딩이 없는 문제는 최대한 구체적으로 답변해주세요. 

선택형 질문 목록 
- ISSUE 3. 이 프로젝트를 최신화(PHP, Laravel, 기타 라이브러리 등) 한다면 어떻게 계획을 세우시겠습니까?
- ISSUE 4. 필수 과제에서 사용된 PersonalTrainer Class를 보호해줄 Unit Test를 작성 해주세요.
  - tests 디렉토리 하위 적절한 위치에 추가해주세요.
- ISSUE 5. Post의 제목이 노출되는 모든 화면에서 제목 옆에 Category를 아래 규칙에 맞게 표시해주세요.
  - Category 1 : 빨강
  - Category 2 : 파랑
  - Category 3 : 초록
- ISSUE 6. 월요일에 출근하니, AWS free tier로 단일 인스턴스에서 서비스되던 이 사이트가 주말 황금시간대에 TV에 광고된다는 소식이 들린다면, 누구와 어떤 이야기를 나누고, 개발팀 입장에서 어떤 준비를 하시겠습니까?
- ISSUE 7. 위에 언급한 것 이외에 이 프로젝트에서 개선이 필요하다고 생각하시는 게 있나요?

## Laravel 5-5 example ##

**Laravel 5-5 example** is a tutorial application.

### Installation ###
 
* type `cd projectname`
* type `composer install`
* copy *.env.example* to *.env*
* type `php artisan key:generate`to generate secure key in *.env* file
* type `touch database/database.sqlite` to create the file
* type `php artisan migrate --seed` to create and populate tables
* edit *.env* for emails configuration

