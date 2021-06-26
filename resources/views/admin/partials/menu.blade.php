<?php
    $menus = [
        [
            'name' => 'Dashboard',
            'icon' => 'dashboard',
            'route' => 'dashboard'
        ],
        [
            'is_parent' => true,
            'name' => 'Resources',
            'icon' => 'view_list',
            'children' => [
                [
                    'name' => 'Users',
                    'icon' => 'person_outline',
                    'route' => 'adminUsers'
                ],
                [
                    'name' => 'Categories',
                    'icon' => 'folder_open',
                    'route' => 'admin.categories'
                ],
            ]
        ]
        //         [
        //             'name' => 'Posts',
        //             'icon' => 'book',
        //             'route' => 'admin.posts'
        //         ],
        //         [
        //             'name' => 'Pages',
        //             'icon' => 'file-text',
        //             'route' => 'admin.pages'
        //         ],
        //         [
        //             'name' => 'Comments',
        //             'icon' => 'comments',
        //             'route' => 'admin.comments'
        //         ],
        //         [
        //             'name' => 'Tags',
        //             'icon' => 'tags',
        //             'route' => 'admin.tags'
        //         ],
        //         [
        //             'name' => 'IP',
        //             'icon' => 'internet-explorer',
        //             'route' => 'admin.ips'
        //         ],
        //         [
        //             'name' => 'Images',
        //             'icon' => 'image',
        //             'route' => 'admin.images'
        //         ],
        //         [
        //             'name' => 'Files',
        //             'icon' => 'file-archive-o',
        //             'route' => 'admin.files'
        //         ]
        //     ]
        // ],
        // [
        //     'is_parent' => true,
        //     'name' => 'Mail',
        //     'icon' => 'email',
        //     'children' => [
        //         [
        //             'name' => 'Inbox',
        //             'icon' => 'email',
        //             'route' => 'admin.mail'
        //         ],
        //         [
        //             'name' => 'Inbox',
        //             'icon' => 'email',
        //             'route' => 'admin.mail'
        //         ],
        //     ]
        // ],
        // [
        //     'name' => 'Settings',
        //     'icon' => 'settings_application',
        //     'route' => 'admin.settings'
        // ],
        // [
        //     'name' => 'Application',
        //     'icon' => 'apps',
        //     'route' => 'admin.app'
        // ],
    ]
?>

@foreach( $menus as $menu)
    @if(isset($menu['is_parent']) && $menu['is_parent'])
        <?php
            foreach ($menu['children'] as $children_menu) {
                if (route($children_menu['route']) == request()->url()) {
                    $show = true;
                    break;
                } else
                    $show = false;
            }
        ?>
        <li class="nav-item {{ $show ? ' active':'' }}">
            <a href="#" class="nav-link nav-toggle">
                <i class="material-icons">{{ $menu['icon'] }}</i>
                <span class="title">{{ $menu['name'] }}</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu" id="{{ $menu['name'] }}">
                @foreach( $menu['children'] as $children_menu)
                    <?php $link = route($children_menu['route']);?>
                    <li class="nav-item {{ $link == request()->url() ? ' active':'' }}">
                        <a href="{{ $link }}" class="nav-link ">
                            <i class="material-icons">{{ $children_menu['icon'] }}</i>
                            <span class="title">{{ $children_menu['name'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    @else
        <?php $link = route($menu['route']);?>
        <li class="nav-item {{ $link == request()->url() ? ' active':'' }}">
            <a href="{{ $link }}" class="nav-link nav-toggle">
                <i class="material-icons">{{ $menu['icon'] }}</i>
                <span class="title">{{ $menu['name'] }}</span>
            </a>
        </li>
    @endif
@endforeach
