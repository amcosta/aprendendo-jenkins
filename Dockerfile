FROM ubuntu
MAINTAINER Alex Moreno <alex.moreno.costa@gmail.com>
EXPOSE 8080 50000
RUN apt-get update
RUN apt-get install -y \
    openjdk-8-jre \
    wget
RUN wget http://mirrors.jenkins.io/war-stable/latest/jenkins.war
ENTRYPOINT java -jar jenkins.war --httpPort=8080