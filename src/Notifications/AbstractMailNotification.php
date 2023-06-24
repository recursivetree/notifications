<?php

/*
 * This file is part of SeAT
 *
 * Copyright (C) 2015 to 2022 Leon Jacobs
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

namespace Seat\Notifications\Notifications;

use DateTime;
use Seat\Notifications\Jobs\AbstractNotification;
use Illuminate\Queue\Middleware\RateLimitedWithRedis;

abstract class AbstractMailNotification extends AbstractNotification
{
    public const RATE_LIMIT_KEY = 'mail_notifications';
    public const RATE_LIMIT = 60;

    public function middleware(): array
    {
        return [new RateLimitedWithRedis(self::RATE_LIMIT_KEY)];
    }

    public function retryUntil(): DateTime
    {
        return now()->addMinutes(60);
    }
}
