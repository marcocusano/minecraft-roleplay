export default [

  {
    title: 'Control Panel',
    to: { name: 'index' },
    icon: { icon: 'mdi-home-outline' },
    children: [
      { title: 'Staff', to: 'admin-staff' },
      { title: 'Companies', to: 'admin-companies' },
    ],
  },

  { heading: 'Companies' },

  {
    title: 'Bank',
    to: { name: 'companies' },
    icon: { icon: 'mdi-bank' },
  },

]
