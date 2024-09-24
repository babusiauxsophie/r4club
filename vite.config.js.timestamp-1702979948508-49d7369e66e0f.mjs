// // vite.config.js
// import { defineConfig } from "file:///C:/Users/sophi/OneDrive/Bureaublad/school/pgm/23-24/ContentManagementSystems/eindopdracht/niche-community-babusiauxsophie/node_modules/vite/dist/node/index.js";
// import laravel from "file:///C:/Users/sophi/OneDrive/Bureaublad/school/pgm/23-24/ContentManagementSystems/eindopdracht/niche-community-babusiauxsophie/node_modules/laravel-vite-plugin/dist/index.mjs";
// var vite_config_default = defineConfig({
//   plugins: [
//     laravel({
//       input: [
//         "resources/css/app.css",
//         "resources/js/app.js"
//       ],
//       refresh: true
//     })
//   ]
// });
// export {
//   vite_config_default as default
// };
// //# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxVc2Vyc1xcXFxzb3BoaVxcXFxPbmVEcml2ZVxcXFxCdXJlYXVibGFkXFxcXHNjaG9vbFxcXFxwZ21cXFxcMjMtMjRcXFxcQ29udGVudE1hbmFnZW1lbnRTeXN0ZW1zXFxcXGVpbmRvcGRyYWNodFxcXFxuaWNoZS1jb21tdW5pdHktYmFidXNpYXV4c29waGllXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ZpbGVuYW1lID0gXCJDOlxcXFxVc2Vyc1xcXFxzb3BoaVxcXFxPbmVEcml2ZVxcXFxCdXJlYXVibGFkXFxcXHNjaG9vbFxcXFxwZ21cXFxcMjMtMjRcXFxcQ29udGVudE1hbmFnZW1lbnRTeXN0ZW1zXFxcXGVpbmRvcGRyYWNodFxcXFxuaWNoZS1jb21tdW5pdHktYmFidXNpYXV4c29waGllXFxcXHZpdGUuY29uZmlnLmpzXCI7Y29uc3QgX192aXRlX2luamVjdGVkX29yaWdpbmFsX2ltcG9ydF9tZXRhX3VybCA9IFwiZmlsZTovLy9DOi9Vc2Vycy9zb3BoaS9PbmVEcml2ZS9CdXJlYXVibGFkL3NjaG9vbC9wZ20vMjMtMjQvQ29udGVudE1hbmFnZW1lbnRTeXN0ZW1zL2VpbmRvcGRyYWNodC9uaWNoZS1jb21tdW5pdHktYmFidXNpYXV4c29waGllL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgICBwbHVnaW5zOiBbXG4gICAgICAgIGxhcmF2ZWwoe1xuICAgICAgICAgICAgaW5wdXQ6IFtcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Nzcy9hcHAuY3NzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2FwcC5qcycsXG4gICAgICAgICAgICBdLFxuICAgICAgICAgICAgcmVmcmVzaDogdHJ1ZSxcbiAgICAgICAgfSksXG4gICAgXSxcbn0pO1xuIl0sCiAgIm1hcHBpbmdzIjogIjtBQUFtakIsU0FBUyxvQkFBb0I7QUFDaGxCLE9BQU8sYUFBYTtBQUVwQixJQUFPLHNCQUFRLGFBQWE7QUFBQSxFQUN4QixTQUFTO0FBQUEsSUFDTCxRQUFRO0FBQUEsTUFDSixPQUFPO0FBQUEsUUFDSDtBQUFBLFFBQ0E7QUFBQSxNQUNKO0FBQUEsTUFDQSxTQUFTO0FBQUEsSUFDYixDQUFDO0FBQUEsRUFDTDtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==


// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
      ],
      refresh: true,
    }),
  ],
});
