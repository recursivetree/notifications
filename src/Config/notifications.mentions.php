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

return [
    'discord_@everyone' => [
        'type' => 'discord',
        'name' => 'notifications::mentions.discord_@everyone',
        'creation_controller_method' => 'Seat\Notifications\Http\Controllers\MentionsController@createDiscordAtEveryone',
        'message_adapter' => 'Seat\Notifications\Mentions\DiscordMentionsAdapter@populateAtEveryone',
    ],
    'discord_@here' => [
        'type' => 'discord',
        'name' => 'notifications::mentions.discord_@here',
        'creation_controller_method' => 'Seat\Notifications\Http\Controllers\MentionsController@createDiscordAtHere',
        'message_adapter' => 'Seat\Notifications\Mentions\DiscordMentionsAdapter@populateAtHere',
    ],
    'discord_@role' => [
        'type' => 'discord',
        'name' => 'notifications::mentions.discord_@role',
        'creation_controller_method' => 'Seat\Notifications\Http\Controllers\MentionsController@createDiscordAtRole',
        'message_adapter' => 'Seat\Notifications\Mentions\DiscordMentionsAdapter@populateAtRole',
    ],
    'discord_@user' => [
        'type' => 'discord',
        'name' => 'notifications::mentions.discord_@user',
        'creation_controller_method' => 'Seat\Notifications\Http\Controllers\MentionsController@createDiscordAtUser',
        'message_adapter' => 'Seat\Notifications\Mentions\DiscordMentionsAdapter@populateAtUser',
    ],
];
