@props([
    'emailTitle',
    'emailSubtitle' => null,
    'logoUrl'
])

@php
    $statusColors = [
        'new' => '#3b82f6',
        'in_progress' => '#f59e0b',
        'closed' => '#22c55e',
        'rejected' => '#ef4444',
    ];
@endphp

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $emailTitle ?? config('app.name') }}</title>
</head>
<body style="margin:0; padding:0; background:#f1f5f9; font-family:Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f1f5f9; padding:40px 0;">
    <tr>
        <td align="center">

            <table width="600" cellpadding="0" cellspacing="0"
                   style="background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 10px 25px rgba(0,0,0,.08);">

                {{-- Header --}}
                <tr>
                    <td>
                        <table width="100%" cellpadding="0" cellspacing="0" style="display:flex; align-items:center;">
                            <td style="padding:36px 0 36px 32px; background:#61a9ad;">
                                <img
                                    src="{{ asset('images/full-logo-2.png') }}"
                                    alt="Omni Outsource"
                                    style="max-height:140px; width:auto; display:block; margin:0 auto 16px;"
                                >
                            </td>
                            <td style="padding:36px 76px 36px 32px; background:#61a9ad;">

                                <h2 style="margin:0; font-size:20px; font-weight:700; line-height:1.3;">
                                    {{ $emailTitle }}
                                </h2>

                                @if(!empty($emailSubtitle))
                                    <p style="margin:8px 0 0; font-size:14px; line-height:1.4;">
                                        {{ $emailSubtitle }}
                                    </p>
                                @endif
                            </td>
                        </table>
                    </td>
                </tr>


                {{-- Body --}}
                <tr>
                    <td style="padding:32px; color:#0f172a; font-size:14px; line-height:1.6;">
                        {{ $slot }}
                    </td>
                </tr>

                {{-- Footer --}}
                <tr>
                    <td style="padding:20px 32px; background:#f8fafc; font-size:12px; color:#64748b; text-align:center;">
                        © {{ date('Y') }} Omni Outsource. All rights reserved.
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>
