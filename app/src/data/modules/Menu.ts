////////////////
// Interfaces //
////////////////

export interface MenuItem {
    slug:string,
    label:string,
    icon?:MenuIcon,
    link:MenuLink,
    childs?:Array<MenuItem>
}

export interface MenuIcon {
    style?:string,
    name:string
}

export interface MenuLink {
    href?:string,
    to?:string,
    target?:'_blank'|'_self'
}

//////////
// Data //
//////////

// Account
export const AccountMenu:Array<MenuItem> = [
    {
        slug: 'profile',
        label: 'My Profile',
        icon: { name: 'user' },
        link: { to: '/account/profile' }
    },
    {
        slug: 'curriculum',
        label: 'Curriculum',
        icon: { name: 'file-lines' },
        link: { to: '/account/cv' },
    },
    {
        slug: 'banking',
        label: 'Home Banking',
        icon: { name: 'piggy-bank' },
        link: { to: '/account/banking' },
    },
    {
        slug: 'subscriptions',
        label: 'Subscriptions',
        icon: { name: 'retweet' },
        link: { to: '/account/subscriptions' }
    }
];

// Admin
export const AdminMenu:Array<MenuItem> = [
    {
        slug: 'companies',
        label: 'Companies',
        icon: { name: 'building' },
        link: { to: '/admin/companies' }
    },
    {
        slug: 'citizens',
        label: 'Citizens',
        icon: { name: 'users' },
        link: { to: '/admin/citizens' }
    },
    {
        slug: 'reviews',
        label: 'Reviews',
        icon: { name: 'comment' },
        link: { to: '/admin/reviews' }
    },
    {
        slug: 'transactions',
        label: 'Transactions',
        icon: { name: 'piggy-bank' },
        link: { to: '/admin/transactions' }
    }
];

// Apps
export const AppsMenu:Array<MenuItem> = [
    {
        slug: 'jobs',
        label: 'Jobs',
        icon: { name: 'briefcase' },
        link: { to: '/app/jobs' }
    },
    {
        slug: 'real-estate',
        label: 'Real Estate',
        icon: { name: 'home' },
        link: { to: '/app/real-estate' }
    },
    {
        slug: 'drive',
        label: 'Drive',
        icon: { name: 'folder' },
        link: { to: '/app/drive' }
    },
    {
        slug: 'trading',
        label: 'Trading',
        icon: { name: 'money-bill-trend-up' },
        link: { to: '/app/trading' }
    },
    {
        slug: 'marketplace',
        label: 'Marketplace',
        icon: { name: 'shopping-cart' },
        link: { to: '/app/marketplace' }
    },
    {
        slug: 'hacking',
        label: 'Hacking',
        icon: { name: 'user-secret' },
        link: { to: '/app/hacking' }
    },
];

export default {
    account: AccountMenu,
    admin: AdminMenu,
    apps: AppsMenu
};