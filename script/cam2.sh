export LD_LIBRARY_PATH=.
cd ../mjpg-streamer/
./mjpg_streamer -i "./input_uvc.so -d /dev/video0 -r 1280x720 -f 20" -o "./output_http.so -p 8081"

