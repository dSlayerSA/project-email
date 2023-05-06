FROM nginx

WORKDIR /app

COPY . /app

RUN apt-get update 
RUN apt-get install -y npm
RUN npm run build
RUN cp -r dist/. /usr/share/nginx/html