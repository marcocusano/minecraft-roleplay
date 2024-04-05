import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        // Home
        {
            path: '/',
            name: 'home',
            component: () => import('../views/HomeView.vue')
        },
        // Account
        {
            path: '/account',
            name: 'account',
            children: [
                {
                    path: 'banking',
                    name: 'account.banking',
                    components: {
                        default: () => import('../views/account/AccountDefaultView.vue'),
                        content: () => import('../views/account/contents/AccountBankingView.vue')
                    },
                    meta: {
                        layout: 'account'
                    }
                },
                {
                    path: 'cv',
                    name: 'account.curriculum',
                    components: {
                        default: () => import('../views/account/AccountDefaultView.vue'),
                        content: () => import('../views/account/contents/AccountCurriculumView.vue')
                    },
                    meta: {
                        layout: 'account'
                    }
                },
                {
                    path: 'profile',
                    name: 'account.profile',
                    components: {
                        default: () => import('../views/account/AccountDefaultView.vue'),
                        content: () => import('../views/account/contents/AccountProfileView.vue')
                    },
                    meta: {
                        layout: 'account'
                    }
                },
                {
                    path: 'subscriptions',
                    name: 'account.subscriptions',
                    components: {
                        default: () => import('../views/account/AccountDefaultView.vue'),
                        content: () => import('../views/account/contents/AccountSubscriptionsView.vue')
                    },
                    meta: {
                        layout: 'account'
                    }
                },
            ]
            
        },
        // Admin
        {
            path: '/admin',
            name: 'admin',
            children: [
                { path: 'citizens', name: 'admin.citizens', component: () => import('../views/admin/AdminCitizensView.vue') },
                { path: 'companies', name: 'admin.companies', component: () => import('../views/admin/AdminCompaniesView.vue') },
                { path: 'reviews', name: 'admin.reviews', component: () => import('../views/admin/AdminReviewsView.vue') },
                { path: 'transactions', name: 'admin.transactions', component: () => import('../views/admin/AdminTransactionsView.vue') }
            ]
        },
        // Apps
        {
            path: '/app',
            name: 'apps',
            children: [
                { path: 'jobs', name: 'apps.jobs', component: () => import('../views/apps/AppJobsView.vue') },
                { path: 'real-estate', name: 'apps.realestate', component: () => import('../views/apps/AppRealEstateView.vue') },
                { path: 'drive', name: 'apps.drive', component: () => import('../views/apps/AppDriveView.vue') },
                { path: 'trading', name: 'apps.trading', component: () => import('../views/apps/AppTradingView.vue') },
                { path: 'marketplace', name: 'apps.marketplace', component: () => import('../views/apps/AppMarketplaceView.vue') },
                { path: 'hacking', name: 'apps.hacking', component: () => import('../views/apps/AppHackingView.vue') },
            ]
        },
        // Changes
        { 
            path: '/changes',
            name: 'changes',
            component: () => import('../views/ChangesView.vue')
        },
        // Companies
        {
            path: '/companies',
            name: 'companies',
            children: [
                {
                    path: ':slug',
                    name: 'companies.read',
                    children: [
                        {
                            path: '',
                            name: 'companies.dashboard',
                            components: {
                                default: () => import('../views/companies/CompaniesDefaultView.vue'),
                                content: () => import('../views/companies/contents/CompaniesDashboardView.vue')
                            },
                            meta: {
                                layout: 'companies'
                            }
                        },
                        {
                            path: 'employees',
                            name: 'companies.employees',
                            components: {
                                default: () => import('../views/companies/CompaniesDefaultView.vue'),
                                content: () => import('../views/companies/contents/CompaniesEmployeesView.vue')
                            },
                            meta: {
                                layout: 'companies'
                            }
                        },
                        {
                            path: 'transactions',
                            name: 'companies.transactions',
                            components: {
                                default: () => import('../views/companies/CompaniesDefaultView.vue'),
                                content: () => import('../views/companies/contents/CompaniesTransactionsView.vue')
                            },
                            meta: {
                                layout: 'companies'
                            }
                        },                       
                    ]
                }
            ]
        },
        // Documentation
        {
            path: '/documentation',
            name: 'documentation',
            component: () => import('../views/documentation/DocumentationIndexView.vue')
        },
        // Privacy Policy
        {
            path: '/privacy',
            name: 'privacy',
            component: () => import('../views/PrivacyView.vue')
        },
        { // Terms and Conditions
            path: '/terms',
            name: 'terms',
            component: () => import('../views/TermsView.vue')
        },
    ]
})

export default router
