FROM registry.access.redhat.com/ubi8/ubi
USER 0
#RUN yum update httpd
RUN yum -y install httpd
EXPOSE 8080:8080
#CMD ["tail", "-f", "/dev/null"]
CMD ["httpd"]
