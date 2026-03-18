#!/bin/ash

G="\033[38;5;82m"
Y="\033[38;5;226m"
R="\033[38;5;196m"
C="\033[38;5;51m"
B="\033[38;5;33m"
O="\033[38;5;202m"
W="\033[38;5;255m"
NC="\033[0m"

clear
echo -e "${O}┌──────────────────────────────────────────────────┐${NC}"
echo -e "${O}│${W}                     FurCode                      ${O}│${NC}"
echo -e "${O}└──────────────────────────────────────────────────┘${NC}"
echo ""

log_success() { echo -e "  ${G}[OK]${NC} $1"; }
log_error() { echo -e "  ${R}[ERREUR]${NC} $1"; }

echo -e "${W}SYSTEME${NC}"
echo -e "  ${C}Identifiant :${NC} $(hostname)"
echo -e "  ${C}Plateforme  :${NC} $(uname -sr)"
echo ""

echo -e "${W}MAINTENANCE${NC}"
echo -e "  Nettoyage du répertoire temporaire..."
rm -rf /home/container/tmp/* 2>/dev/null
log_success "Répertoire purgé."

echo -e "\n${W}SERVICES${NC}"
echo -e "  Initialisation PHP-FPM..."
if /usr/sbin/php-fpm8 --fpm-config /home/container/php-fpm/php-fpm.conf --daemonize; then
    PHP_V=$(/usr/sbin/php-fpm8 -v | head -n 1 | cut -d " " -f 2)
    log_success "Version ${PHP_V} active."
else
    log_error "Echec PHP-FPM."
    exit 1
fi

echo -e "\n${W}RESEAU${NC}"
echo -e "  Démarrage du serveur web..."
log_success "Serveur opérationnel."

echo -e "\n${O}──────────────────────────────────────────────────${NC}"
echo -e "  ${W}ETAT :${NC}        ${G}Operationnel${NC}"
echo -e "  ${W}ADRESSE :${NC}     ${B}${SERVER_IP:-127.0.0.1}:${SERVER_PORT:-80}${NC}"
echo -e "  ${W}HORODATAGE :${NC}  $(date '+%d/%m/%Y %H:%M:%S')"
echo -e "${O}──────────────────────────────────────────────────${NC}"
echo ""

/usr/sbin/nginx -c /home/container/nginx/nginx.conf -p /home/container/