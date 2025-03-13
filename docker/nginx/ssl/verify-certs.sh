#!/bin/bash

local cert_file="./cert.pem"
local key_file="./key.pem"

# Verify mkcert is installed
if ! command -v mkcert &> /dev/null; then
    echo "Error: mkcert is not installed. Please install it first."
    echo "Instructions: https://github.com/FiloSottile/mkcert#installation"
    exit 1
fi

# Check if certificates exist
if [ ! -f "$cert_file" ] || [ ! -f "$key_file" ]; then
    echo "Certificates missing or incomplete. Generating certificates..."
    cd "$certs_dir" || exit
    mkcert -install
    mkcert -cert-file cert.pem -key-file key.pem localhost
    echo "Certificates created successfully."
    cd - >/dev/null || exit
else
    echo "Certificates already exist. Skipping generation."
fi

# Set correct permissions
echo "Setting permissions for certificates in $certs_dir..."
sudo chmod 644 "$cert_file" "$key_file"
echo "Certificates moved and permissions set successfully."