export LD_LIBRARY_PATH=.
cd ../mjpg-streamer/
./mjpg_streamer -i "./input_uvc.so -d /dev/video0 -r 640x480 -y -f 10" ./output_http.so &

