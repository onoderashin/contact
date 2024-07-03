<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fashionably Late</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Fashionably Late
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="{{ route('inquiry.store') }}" method="POST">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="last_name" placeholder="姓（山田）" value="{{ old('last_name') }}" />
            </div>
            @error('last_name')
            <div class="form__error">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="first_name" placeholder="名（太郎）" value="{{ old('first_name') }}" />
            </div>
            @error('first_name')
            <div class="form__error">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--select">
              <select name="gender" id="genderSelect">
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>男性</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>女性</option>
                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>その他</option>
              </select>
            </div>
            @error('gender')
            <div class="form__error">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
            </div>
            @error('email')
            <div class="form__error">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}" />
            </div>
            @error('tel')
            <div class="form__error">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            @error('address')
            <div class="form__error">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building_name" placeholder="千駄ヶ谷マンション101" value="{{ old('building_name') }}" />
            </div>
            @error('building_name')
            <div class="form__error">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="inquiry_type" placeholder="選択してください" value="{{ old('inquiry_type') }}" />
            </div>
            @error('inquiry_type')
            <div class="form__error">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください">{{ old('content') }}</textarea>
            </div>
            @error('content')
            <div class="form__error">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>