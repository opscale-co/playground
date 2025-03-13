import eslint from "@eslint/js";
import vueEssential from 'eslint-plugin-vue';
import prettierConfig from 'eslint-config-prettier';
import globals from "globals";

export default [
    {
        ignores: [
            'public/**/*',
            'resources/dist/**',
            'vendor/**/*',
            '.vapor/**/*',
            'docker/**/*'
        ]
    },
    {
        files: ['resources/**/*.{js,vue}'],
    },
    eslint.configs.recommended,
    ...vueEssential.configs['flat/recommended'],
    prettierConfig,
    {
        languageOptions: {
            ecmaVersion: 2018,
            globals: {
                Nova: true,
                ...globals.browser,
                ...globals.node,
            },
        }
    }
];