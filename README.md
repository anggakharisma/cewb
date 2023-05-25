# CEWB

## Overview

[![Laravel - 10.x](https://img.shields.io/badge/Laravel-10.x-2ea44f?logo=laravel)](https://laravel.com)  ![vue - vue](https://img.shields.io/badge/vue-vue-2ea44f?logo=vue.js) ![jenkins - jenkins](https://img.shields.io/badge/jenkins-jenkins-2ea44f?logo=jenkins) ![docker - docker](https://img.shields.io/badge/docker-docker-2ea44f?logo=docker) ![postgres - postgres](https://img.shields.io/static/v1?label=postgres&message=postgres&color=2ea44f&logo=postgresql)

🚀 Marketplace (Tokopedia, Shopee) website built with laravel & Vue 🚀

## Development & Deployment
- 🐳 You can use docker (or not) for development and or deployment, Dockerfile.dev for development & Dockerfile for production. Also included dockerfile for testing called Dockerfile.jenkins (because why not)
		
		cp .env.example .env
		docker compose up -d
		docker exec cewb-app composer install
		docker exec cewb-app yarn install

		docker exec cewb-app php artisan key:generate

		# and then do the usual
		docker exec cewb-app php artisan migrate
		docker exec cewb-app php artisan db:seed 
	💻 access it on localhost:9898

- 🙎 Jenkins configuration included
- 👷‍ How to buiild image & deploy for ️production
		
		docker build -t cewb_production -f Dockerfile
		docker run -d --name cewb_production -p <your-port>:80
