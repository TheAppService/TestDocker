FROM registry.access.redhat.com/ubi8/ubi
USER 0
#RUN yum update httpd
RUN yum -y install httpd
# To have some Debugging Utilities when attaching to the container
RUN yum -y install procps

EXPOSE 8080:8080
CMD ["/usr/sbin/httpd", "-DFOREGROUND" ,"-e", "debug"]

#Debugging:
#CMD ["tail", "-f", "/dev/null"]
