<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Confirmation</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
</head>

<body>
<header class="header fashionably-late">
    <div class="header__inner">
        <a class="header__logo" href="/">
            Fashionably Late
        </a>
    </div>
</header>

<main class="main-content">
    <div class="confirm__content">
        <div class="confirm__heading contact">
            <h2>Confirm</h2>
        </div>
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        {{ $data['last_name'] }} {{ $data['first_name'] }}
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        {{ $data['gender'] == 'male' ? '男性' : ($data['gender'] == 'female' ? '女性' : 'その他') }}
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        {{ $data['email'] }}
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        {{ $data['tel'] }}
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        {{ $data['address'] }}
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        {{ $data['building_name'] }}
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        {{ $data['inquiry_type'] }}
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        {{ $data['content'] }}
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <a href="{{ route('inquiry.form') }}" onclick="history.back();return false;" class="modify-link">修正</a>
            <form action="{{ route('inquiry.submit') }}" method="POST" style="display:inline;">
                @csrf
                <input type="hidden" name="last_name" value="{{ $data['last_name'] }}">
                <input type="hidden" name="first_name" value="{{ $data['first_name'] }}">
                <input type="hidden" name="gender" value="{{ $data['gender'] }}">
                <input type="hidden" name="email" value="{{ $data['email'] }}">
                <input type="hidden" name="tel" value="{{ $data['tel'] }}">
                <input type="hidden" name="address" value="{{ $data['address'] }}">
                <input type="hidden" name="building_name" value="{{ $data['building_name'] }}">
                <input type="hidden" name="inquiry_type" value="{{ $data['inquiry_type'] }}">
                <input type="hidden" name="content" value="{{ $data['content'] }}">
                <button type="submit" class="form__button-submit">送信</button>
            </form>
        </div>
    </div>
</main>
</body>

</html>