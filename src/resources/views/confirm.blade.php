<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
    <link rel="stylesheet" href="{{ asset('/css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/confirm.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                Confirm
            </div>
            <form class="form_group" action="{{ route('contact.store') }}" method="post">
                @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text" name="last_name">{{ $contact['last_name'] }} {{ $contact['first_name'] }}</td>
                        </tr>
                        <tr class=" confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text" name="gender">{{ $contact['gender'] }}</td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text" name="email">{{ $contact['email'] }}</td>
                        </tr>
                        <tr class=" confirm-table__row">
                            <th class="confirm-table__header">電話番号</th>
                            <td class="confirm-table__text" name="tel">{{ $contact['tel'] }}</td>
                        </tr>
                        <tr class=" confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                            <td class="confirm-table__text" name="address">{{ $contact['address'] }}</td>
                        </tr>
                        <tr class=" confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                            <td class="confirm-table__text" name="building">{{ $contact['building'] }}</td>
                        </tr>
                        <tr class=" confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ種別</th>
                            <td class="confirm-table__text" name="category_id">{{ $contact['category_id'] }}</td>
                        </tr>
                        <tr class=" confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text" name="detail">{{ $contact['detail'] }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class=" form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                    <button class="form__button-reset" type="reset">修正</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>