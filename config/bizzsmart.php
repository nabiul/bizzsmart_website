<?php

return [
    'admin_email' => env('BIZZSMART_ADMIN_EMAIL', 'admin@example.com'),
    'admin_password' => env('BIZZSMART_ADMIN_PASSWORD', 'change-this-password'),
    'product_ai' => [
        'provider' => env('PRODUCT_AI_PROVIDER', 'openai'),
        'api_key' => env('OPENAI_API_KEY', ''),
        'vector_store_id' => env('PRODUCT_AI_VECTOR_STORE_ID', ''),
        'model' => env('PRODUCT_AI_MODEL', 'gpt-5-mini'),
        'deepseek_api_key' => env('DEEPSEEK_API_KEY', ''),
        'deepseek_model' => env('DEEPSEEK_MODEL', 'deepseek-chat'),
        'documents_path' => env('PRODUCT_AI_DOCUMENTS_PATH', resource_path('ai-knowledge')),
        'max_output_tokens' => (int) env('PRODUCT_AI_MAX_OUTPUT_TOKENS', 700),
        'timeout' => (int) env('PRODUCT_AI_TIMEOUT', 30),
    ],
];
